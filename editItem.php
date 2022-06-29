<?php
include 'session.php';
include 'config.php';
$id = $_GET['id'];

$getItem = "select * from up where itemID='".$id."'";
$result = $conn->query($getItem);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
        $lpno = $row['lpNo'];
        $item = $row['item'];
        $value = $row['value'];
        $qty = $row['qty'];
        $onCharge = $row['onCharge'];
        $itemImage = $row['picture'];
        //$encoded_itemImage = base64_encode($itemImage);

        $datePurchased = $row['datePurchased'];
        $cat = $row['category'];
        $subcat = $row['sub_cat'];
        $minsheet = $row['minSheet'];
        $minsheetImage = $row['minSheetPic'];
        //$encoded_minsheetImage = base64_encode($minsheetImage);
        
        $currentLoc = $row['currentLoc'];
        $prevLocDate = $row['prevLocDate'];
        $warranty = $row['warranty'];
        $itemCondition = $row['itemCondition'];
        //$condemnationBd = $row['condemnationBd'];
        $enteredBy = $row['enteredBy'];
        $remarks = $row['remarks'];
    }
}
else
{
    ?>
    <div class="alert alert-info">
        <strong>Info!</strong> Something went wrong! Pl try again...
    </div>
    <?php
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Edit Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/theme.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bold-upsell-custom.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->

<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<style>
    .txtBox{
        width:100%;
        padding:1.5%;
        border-radius: 10px;
    }

    label{
        font-size:1em;
    }

    .btnn{
        padding:1%;
        background: blue;
        border: black;
        margin-left:35%;
        letter-spacing: 1px;
        font-size:1.5em;
    }
</style>
</head>
<body id="overlay">	
    <?php include 'navbar.php';
    ?>

    <div id="rest" class="page-container">              
    <?php include 'header.php'; ?>

        <!-- <div class="Slideshow__ImageContainer  AspectRatio hidden-phone" style="--aspect-ratio:1.78">
            <img style="width:auto" class="Slideshow__Image hide-no-js lazyautosizes Image--lazyLoaded" src="assets/bg.png"/>
        </div> -->

        <div id="items" class="shopify-section shopify-section--bordered">
            <section class="Section Section--spacingNormal">
                <header class="SectionHeader SectionHeader--center">
                    <div class="Container">
                        <h2 class="SectionHeader__Heading Heading u-h1">UPDATE / EDIT ITEM</h2>
                        <h1 style="font-size:1.5em; display:none" id="alert" class='col-xs-offset-3 alert-success col-lg-6'>Item Edited Successfully!</h1>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <div class="col-md-3"></div>
                            <!-- Login Form -->
                            <div class="col-md-6">
                                <form action="#" method="post" class="form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>LP #</label><br/>
                                        <input type="text" name="lpno" class="txtBox" value="<?php echo $lpno; ?>"/>
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Name</label><br/>
                                        <input type="text" name="item" class="txtBox" value="<?php echo $item; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Qty</label><br/>
                                        <input type="text" name="qty" class="txtBox" value="<?php echo $qty; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Value</label><br/>
                                        <input type="text" name="value" class="txtBox" value="<?php echo $value; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Image</label><br/>
                                        <?php if(isset($itemImage)){?>
                                        <img src='<?php echo "uploads/items/".$itemImage; ?>' height="120" width="180">
                                        <?php } ?>
                                        <input type="file" name="itemImage" class="txtBox"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Purchased</label><br/>
                                        <input type="text" name="datePurchased" id="datePur" class="txtBox" value="<?php echo $datePurchased; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label><br/>
                                        <input type="text" name="cat" class="txtBox" value="<?php echo $cat; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub-Category</label><br/>
                                        <input type="text" name="subcat" class="txtBox" value="<?php echo $subcat; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Min Sheet #</label><br/>
                                        <input type="text" name="minsheet" class="txtBox" value="<?php echo $minsheet; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Min Sheet Image</label><br/>
                                        <?php if(isset($minsheetImage)){?>
                                        <img src='<?php echo "uploads/MinSheets/".$minsheetImage; ?>' height="120" width="180">
                                    <?php } ?>
                                        <input type="file" name="minsheetImage" class="txtBox"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Current Loc</label><br/>
                                        <input type="text" name="currentLoc" class="txtBox" value="<?php echo $currentLoc; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Previous Loc and Date</label><br/>
                                        <input type="text" name="prevLocDate" class="txtBox" value="<?php echo $prevLocDate; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Warranty</label><br/>
                                        <input type="text" name="warranty" class="txtBox" value="<?php echo $warranty; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Condition</label><br/>
                                        <input type="text" name="itemCondition" class="txtBox" value="<?php echo $itemCondition; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>On Charge of</label><br/>
                                        <input type="text" name="onCharge" class="txtBox" value="<?php echo $onCharge; ?>"/>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Condemnation Bd</label><br/>
                                        <input type="text" name="condemnationBd" class="txtBox" value="<?php echo $condemnationBd; ?>"/>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Entered By</label><br/>
                                        <input type="text" name="enteredBy" class="txtBox" value="<?php echo $enteredBy; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Remarks</label><br/>
                                        <textarea name="remarks" rows="5" class="txtBox" value="<?php echo $remarks; ?>"></textarea>
                                    </div>
                                    <input type="submit" name="editItem" value="Update Item Details" style="border:black" class="btnn"/>
                                    <br/><br/>
                                </form> 
                            </div>
                            <div class="col-md-3"></div>
                            <?php
                            if(isset($_POST['editItem']))
                            {
                                $lpno = $_POST['lpno'];
                                $item = $_POST['item'];
                                $value = $_POST['value'];
                                $qty = $_POST['qty'];
                                $onCharge = $_POST['onCharge'];

                                if($_FILES['itemImage']['name'] != "")
                                {
                                    $itemImageName = $_FILES['itemImage']['name'];
                                }
                                else
                                {
                                    $itemImageName = $itemImage;
                                }

                                $datePurchased = $_POST['datePurchased'];
                                $cat = $_POST['cat'];
                                $subcat = $_POST['subcat'];
                                $minsheet = $_POST['minsheet'];

                                if($_FILES['minSheetImage']['name'] != "")
                                {
                                    $minsheetImageName = $_FILES['minSheetImage']['name'];
                                }
                                else
                                {
                                    $minsheetImageName = $minsheetImage;
                                }

                                $currentLoc = $_POST['currentLoc'];
                                $prevLocDate = $_POST['prevLocDate'];
                                $warranty = $_POST['warranty'];
                                $itemCondition = $_POST['itemCondition'];
                                //$condemnationBd = $_POST['condemnationBd'];
                                $enteredBy = $_POST['enteredBy'];
                                $remarks = $_POST['remarks'];

                                $editItem = "update up set lpNo='".$lpno."', item='".$item."', qty='".$qty."', category='".$cat."',
                                sub_cat='".$subcat."', minSheet='".$minsheet."', minSheetPic='".$minsheetImageName."', currentLoc='".$currentLoc."',
                                prevLocDate='".$prevLocDate."', warranty='".$warranty."', onCharge='".$onCharge."', value='".$value."',
                                datePurchased='".$datePurchased."', itemCondition='".$itemCondition."', picture='".$itemImageName."', 
                                enteredBy='".$enteredBy."', remarks='".$remarks."' WHERE itemID='".$id."'";
                                $ins = $conn->query($editItem);
                                if($ins===TRUE)
                                {
                                    echo '<script>alert("Data has been updated.");
                                    //  window.history.back();</script>';
                                    ?>
                                    <style>
                                        #alert{
                                            display:block;
                                        }
                                    </style>
                                    <?php
                                }
                                else
                                    echo mysqli_error($conn);                                
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <!-- <?php include 'footer.php'; ?> -->
    </div>

    <script>
        $(document).ready(function(){  
            $.datepicker.setDefaults({  
                dateFormat: 'dd-mm-yy'   
           }); 
            $(function(){  
                $("#datePur").datepicker({dateFormat: 'dd-mm-yy'});
            });  
        });
    </script>
</body>
</html>