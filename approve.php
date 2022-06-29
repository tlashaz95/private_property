<?php
include 'config.php';

// Acct Variables
$name = "";
$appt = "";
$uname = "";
$pwd = "";
$auth = "";

// Item Variables
$lpNo = ""; $item = ""; $qty = ""; $category = ""; $sub_cat = ""; $minSheet = ""; $minSheetPic = "";
$currentLoc = ""; $prevLocDate = ""; $warranty = ""; $onCharge = ""; $value = ""; $datePurchased = "";
$itemCondition = ""; $itemImage = ""; $domain = ""; $enteredBy = ""; $remarks = "";
$date_approved = date('H:i:s d-m-Y', strtotime('+5 hours'));

// Get id
if(isset($_GET['itemId']))
{
    // Item Approve
    $itemId = $_GET['itemId'];

    // Update item tbl status
    $approve = "update item_approval set status='Approved' where approval_id='".$itemId."'";
    $result = $conn->query($approve);

    // Get item details acc to ID
    $getItems = "select * from item_approval where approval_id='".$itemId."'";
    $result = $conn->query($getItems);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $lpNo = $row['lpNo'];
            $item = $row['item'];
            $qty = $row['qty'];
            $category = $row['category'];
            $sub_cat = $row['sub_cat'];
            $minSheet = $row['minSheet'];
            $minSheetPic = $row['minSheetPic'];
            $encodedMinSheetPic = base64_encode($minSheetPic);
            $currentLoc = $row['currentLoc'];
            $prevLocDate = $row['prevLocDate'];
            $warranty = $row['warranty'];
            $onCharge = $row['onCharge'];
            $value = $row['value'];
            $datePurchased = $row['datePurchased'];
            $itemCondition = $row['itemCondition'];
            $itemImage = $row['picture'];
            $encodedItemImage = base64_encode($itemImage);
            $domain = $row['domain'];
            $enteredBy = $row['enteredBy'];
            $remarks = $row['remarks'];
        }
    }

    // Insert data into up tbl
    $addItem = "INSERT INTO up (lpNo, item, qty, category, sub_cat, minSheet, minSheetPic, currentLoc, prevLocDate, warranty, onCharge, value, datePurchased, itemCondition, picture, domain, enteredBy, remarks, date_approved) 
    VALUES ('".$lpNo."', '".$item."', '".$qty."', '".$category."', '".$sub_cat."', '".$minSheet."', '".$encodedMinSheetPic."', '".$currentLoc."', '".$prevLocDate."', '".$warranty."', 
    '".$onCharge."', '".$value."', '".$datePurchased."', '".$itemCondition."', '".$encodedItemImage."', '".$domain."', '".$enteredBy."', '".$remarks."', '".$date_approved."')";
    $itemAdded = $conn->query($addItem);

    if($itemAdded===TRUE)
    {
        echo "Item Added";
        header("Location:itemRequests.php");
    }
    else
        echo mysqli_error($conn);
}

// Acct Approve
else if(isset($_GET['acctId']))
{
    $acctId = $_GET['acctId'];

    // Update acct tbl status
    $approve = "update acct_approval set status='Approved' where id='".$acctId."'";
    $result = $conn->query($approve);

    // Get acct details acc to ID
    $getRecord = "select * from acct_approval where id='".$acctId."'";
    $resultRecord = $conn->query($getRecord);
    if($resultRecord->num_rows > 0)
    {
        while($row = $resultRecord->fetch_assoc())
        {
            $name = $row['name'];
            $appt = $row['appt'];
            $uname = $row['username'];
            $pwd = $row['pwd'];
            $auth = $row['auth'];
        }
    }

    // Insert data into Admin tbl
    $addAcct = "insert into admin (name, appt, username, password, auth, status, approved_date) VALUES
    ('".$name."', '".$appt."', '".$uname."', '".$pwd."', '".$auth."', 'Approved', '".$date_approved."')";
    $acctAdded = $conn->query($addAcct);

    if($acctAdded===TRUE)
    {
        echo "Approved";
        header("Location:acctRequests.php");
    }
    else
        echo "Error...";
}
?>