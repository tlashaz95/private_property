<?php include 'session.php'; 
$enteredBy = $_SESSION['upadmin'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Add Items</title>
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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
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
        margin-left:43%;
        letter-spacing: 3px;
        font-size:1.5em;
    }
</style>
</head>
<body id="overlay">	
    <!-- <div class="right-1sM74 u-pullRight desktop-55rFI u-borderTransparent u-posRelative u-noPrint">
        <div id="Embed">
            <button class="wrapper-AtBcr u-isActionable u-textLeft u-inlineBlock u-borderNone u-textBold u-textNoWrap Arrange Arrange--middle u-userLauncherColor ">
                <span class="container-3PFIa u-userColor icon-3E9qF Icon-2SEmO Arrange-sizeFit u-textInheritColor u-inlineBlock  Icon">
                <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true"><title></title><g id="Layer_4"><path d="M11,12.3V13c0,0-1.8,0-2,0v-0.6c0-0.6,0.1-1.4,0.8-2.1c0.7-0.7,1.6-1.2,1.6-2.1c0-0.9-0.7-1.4-1.4-1.4 c-1.3,0-1.4,1.4-1.5,1.7H6.6C6.6,7.1,7.2,5,10,5c2.4,0,3.4,1.6,3.4,3C13.4,10.4,11,10.8,11,12.3z"></path><circle cx="10" cy="15" r="1"></circle><path d="M10,2c4.4,0,8,3.6,8,8s-3.6,8-8,8s-8-3.6-8-8S5.6,2,10,2 M10,0C4.5,0,0,4.5,0,10s4.5,10,10,10s10-4.5,10-10S15.5,0,10,0 L10,0z"></path></g></svg>
                </span>
                <span class="label-3kk12 Arrange-sizeFit u-textInheritColor u-inlineBlock">Help</span>
            </button>
        </div>
    </div> -->
    
    <!-- Nav bar -->
    <!-- <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <br/><br/><br/>
        <button class="Collapsible__Button Heading u-h6">
            EARBAGS
            <span class="Collapsible__Plus"></span>
        </button>
        <a href="product.php?id=performance">PERFORMANCE</a>
        <a href="product.php?id=tattoo">TATTOO</a>
        <a href="product.php?id=graffiti">GRAFFITI</a>
        <a href="product.php?id=denim">DENIM</a>
        <a href="custom.php">CUSTOMIZED</a>
        <a href="about.php">ABOUT</a>
    </div> -->
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
                        <h2 class="SectionHeader__Heading Heading u-h1">ADD ITEM<br/><br/>
                        <div class="alert-success" style="padding:5px; display:none">Item Request Sent Successfully!</div>
                        </h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <div class="col-md-3"></div>
                            <!-- Login Form -->
                            <div class="col-md-6">
                                <form action="#" method="post" class="form" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>LP # <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="lpno" class="txtBox" placeholder="LP #" required/>
                                        <br/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Name <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="item" class="txtBox" placeholder="Item Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Qty <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="qty" class="txtBox" placeholder="Qty" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Value <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="value" class="txtBox" placeholder="Value" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Image <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="file" name="itemImage" class="txtBox" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Date Purchased <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="datePurchased" id="datePur" class="txtBox" placeholder="Date Purchased" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Category <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="cat" class="txtBox" placeholder="Category" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Sub-Category</label><br/>
                                        <input type="text" name="subcat" class="txtBox" placeholder="Sub-Category"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Min Sheet # <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="minsheet" class="txtBox" placeholder="Min Sheet #" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Min Sheet Image <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="file" name="minsheetImage" class="txtBox" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>UP / CP</label><br/>
                                        <select name="domain" class="txtBox">
                                            <option>UP</option>
                                            <option>CP</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Current Loc</label><br/>
                                        <input type="text" name="currentLoc" class="txtBox" placeholder="Current Loc"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Previous Loc and Date</label><br/>
                                        <input type="text" name="prevLocDate" class="txtBox" placeholder="Previous Loc and Date"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Warranty</label><br/>
                                        <input type="text" name="warranty" class="txtBox" placeholder="Warranty"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Item Condition <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="itemCondition" class="txtBox" placeholder="Item Condition" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>On Charge of</label><br/>
                                        <input type="text" name="onCharge" class="txtBox" placeholder="On Charge of"/>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Condemnation Bd</label><br/>
                                        <input type="text" name="condemnationBd" class="txtBox" placeholder="Condemnation Bd"/>
                                    </div> -->
                                    <div class="form-group">
                                        <label>Entered By</label><br/>
                                        <input type="text" name="enteredBy" class="txtBox" value="<?php echo $enteredBy; ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Remarks</label><br/>
                                        <textarea name="remarks" rows="5" class="txtBox" placeholder="Remarks by CO / QM"></textarea>
                                    </div>
                                    <input type="submit" name="addItem" value="Add Item" style="border:black" class="btnn"/>
                                    <br/><br/>
                                </form> 
                            </div>
                            <div class="col-md-3"></div>
                            <?php
                            if(isset($_POST['addItem']))
                            {
                                $items_folder = "uploads/items/";
                                $minSheet_folder = "uploads/MinSheets/";

                                $lpno = $_POST['lpno'];
                                $item = $_POST['item'];
                                $value = $_POST['value'];
                                $qty = $_POST['qty'];
                                $onCharge = $_POST['onCharge'];
                                if($_FILES['itemImage']['name'] != "")
                                {
                                    $itemImageName = $_FILES['itemImage']['name'];
                                }
                                //$itemImage = addslashes(file_get_contents($_FILES['itemImage']['tmp_name']));


                                $datePurchased = $_POST['datePurchased'];
                                $cat = $_POST['cat'];
                                $subcat = $_POST['subcat'];
                                $minsheet = $_POST['minsheet'];
                                if($_FILES['minsheetImage']['name'] != "")
                                {
                                    $minsheetImageName = $_FILES['minsheetImage']['name'];
                                }
                                //$minsheetImage = addslashes(file_get_contents($_FILES['minsheetImage']['tmp_name']));
                                
                                $currentLoc = $_POST['currentLoc'];
                                $prevLocDate = $_POST['prevLocDate'];
                                $warranty = $_POST['warranty'];
                                $itemCondition = $_POST['itemCondition'];
                                $domain = $_POST['domain'];
                                //$condemnationBd = $_POST['condemnationBd'];
                                //$enteredBy = $_POST['enteredBy'];
                                $remarks = $_POST['remarks'];
                                $request_date = date('H:i:s d-m-Y', strtotime('+5 hours'));

                                $addItem = "INSERT INTO item_approval (lpNo, item, qty, category, sub_cat, minSheet, minSheetPic, currentLoc, prevLocDate, warranty, onCharge, value, datePurchased, itemCondition, picture, domain, enteredBy, remarks, request_date, status)
                                 VALUES 
                                ('".$lpno."', '".$item."', '".$qty."', '".$cat."', '".$subcat."', '".$minsheet."', '".$minsheetImageName."', '".$currentLoc."', '".$prevLocDate."', '".$warranty."', '".$onCharge."', 
                                '".$value."', '".$datePurchased."', '".$itemCondition."', '".$itemImageName."', '".$domain."', '".$enteredBy."', '".$remarks."', '".$request_date."', 'Pending')";
                                //$result = $conn->query($addItem);
                                $ins = $conn->query($addItem);
                                if($ins===TRUE)
                                {
                                    move_uploaded_file($_FILES['itemImage']['tmp_name'], $items_folder.$itemImageName);
                                    move_uploaded_file($_FILES['minsheetImage']['tmp_name'], $minSheet_folder.$minsheetImageName);
                                    ?>
                                    <style>
                                        .alert-success{
                                            display: block;
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