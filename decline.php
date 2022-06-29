<?php
include 'config.php';

// Get id
if(isset($_GET['itemId']))
{
    $itemId = $_GET['itemId'];
    //Delete item request
    $delete = "delete from item_approval where approval_id='".$itemId."'";
    $deleteResult = $conn->query($delete);

    if($deleteResult===TRUE)
    {
        ?>
        <script>confirm('Do you want to Decline the request?');</script>
        <?php
        header("Location:itemRequests.php");
    }
    else
        mysqli_error($conn);
}
else if(isset($_GET['requestId']))
{
    $acctId = $_GET['requestId'];
    // Delete acct request
    $decline = "delete from acct_approval where id='".$acctId."'";
    $result = $conn->query($decline);

    if($result===TRUE)
    {
        ?>
        <script>confirm('Do you want to Decline the request?');</script>
        <?php
        header("Location:acctRequests.php");
    }
    else
        echo "Error...";   
}
?>