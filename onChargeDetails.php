<?php
include 'session.php';
include 'config.php';
$onCharge = $_GET['onCharge'];

$items = "select * from up where onCharge='".$onCharge."'";
$result = $conn->query($items);
$sum = "select SUM(value) as totalCost from up where onCharge='".$onCharge."'";
$sumResult = $conn->query($sum);
$totalCost = $sumResult->fetch_object();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | On Charge of Details</title>
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
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body id="overlay">	
    <!-- Help Button -->
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
    <?php include 'navbar.php'; ?>

    <div id="rest" class="page-container">              
        <?php include 'header.php'; ?>
        <div id="items" style="border-top:1px solid #dcdcdc" class="shopify-section shopify-section--bordered">
            <section class="Section Section--spacingNormal">
                <header class="SectionHeader SectionHeader--center">
                    <div class="Container">
                        <h2 style="text-transform:uppercase" class="SectionHeader__Heading Heading u-h1"><u><?php echo $onCharge." - Value of Rs.".$totalCost->totalCost; ?></u></h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <div class="ProductList ProductList--grid ProductList--removeMargin Grid" data-mobile-count="2" data-desktop-count="4">
                                <!-- Products List -->
                            <?php
                                if ($result->num_rows > 0) 
                                {
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        $image_data = $row['picture'];
                                        $encoded_image = base64_encode($image_data);
                                        ?>
                                        <!-- Products 1 -->
                                        <div class="Grid__Cell 1/2--phone 1/2--tablet 1/4--lap-and-up">
                                            <div class="ProductItem ">
                                                <div class="ProductItem__Wrapper">
                                                    <a href="details.php?id=<?php echo $row['itemID']; ?>" target="_blank" class="ProductItem__ImageWrapper ProductItem__ImageWrapper--withAlternateImage">
                                                        <div class="AspectRatio Product__Available  AspectRatio--tall">
                                                            <?php echo "<img src='data:image/png;base64,{$encoded_image}' alt='Picture is not uploaded'/>"; ?>
                                                            <span class="Image__Loader"></span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="ProductItem__Info ProductItem__Info--center">
                                                    <h2 class="ProductItem__Title Heading"><?php echo $row['item']." (".$row['qty'].")"; ?></h2>
                                                    <div class="ProductItem__PriceList  Heading">
                                                        <span class="ProductItem__Price Price Price--normal Text--subdued">Value in Rs. <?php echo $row['value']; ?></span>
                                                    </div>
                                                    <div class="ProductItem__PriceList  Heading">
                                                        <span class="ProductItem__Price Price Price--normal Text--subdued">On Charge of - <?php echo $row['onCharge']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No items found";
                                }
                            ?>
                            <!-- Products List Ends -->
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <!-- <?php include 'footer.php'; ?> -->
    </div>
</body>
</html>