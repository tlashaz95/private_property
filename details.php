<?php include 'session.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Item Details</title>
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
<script>

//$("#items").printElement();

    function PrintItem()
    {
        var mywindow = window.open('', 'PRINT', 'height=700,width=900');

        var elem = document.getElementById("items");
        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>
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
    include 'config.php';
    $product = $_GET['id'];
    $details = "select * from up where itemID='".$product."'";
    $result = $conn->query($details);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $image_data = $row['picture'];
            $encoded_image = base64_encode($image_data);

            $lpNo = $row['lpNo'];
            $item = $row['item'];
            $value = $row['value'];
            $cat = $row['category'];
            $sub_cat = $row['sub_cat'];
            $purchasedOn = $row['datePurchased'];
            $qty = $row['qty'];
            $onCharge = $row['onCharge'];
            $condition = $row['itemCondition'];
            $warranty = $row['warranty'];
            $currentLoc = $row['currentLoc'];
            $prevLocDate = $row['prevLocDate'];
            // $condemnationBd = $row['condemnationBd'];
            //$tempLoanIssue = $row['tempLoanIssue'];
            //$tempLoanReturn = $row['tempLoanReturn'];
            $enteredBy = $row['enteredBy'];
            $remarks = $row['remarks'];

            $minsheet = $row['minSheet'];
            $image_data2 = $row['minSheetPic'];
            $minsheetPic = base64_encode($image_data2);

            $image_data3 = $row['bdProceedingImg'];
            $BdProceedingImg = base64_encode($image_data3);
        }
    }
    else
    {
        echo "No details found";
    }
    ?>

    <div id="rest" class="page-container">              
    <?php include 'header.php'; ?>

        <!-- <div class="Slideshow__ImageContainer  AspectRatio hidden-phone" style="--aspect-ratio:1.78">
            <img style="width:auto" class="Slideshow__Image hide-no-js lazyautosizes Image--lazyLoaded" src="assets/bg.png"/>
        </div> -->

        <div id="items" class="shopify-section shopify-section--bordered">
        <section class="Product Product--large" data-section-id="product-template" data-section-type="product" data-section-settings="{
            &quot;enableHistoryState&quot;: true,
            &quot;showInventoryQuantity&quot;: false,
            &quot;showThumbnails&quot;: true,
            &quot;inventoryQuantityThreshold&quot;: 1,
            &quot;enableImageZoom&quot;: true,
            &quot;showPaymentButton&quot;: false,
            &quot;useAjaxCart&quot;: true
            }">
        <div class="Product__Wrapper" style="min-height: 1034px;">
            <div class="Product__Gallery Product__Gallery--withThumbnails">
                <span id="ProductGallery" class="Anchor"></span>
                    <div class="Product__Slideshow Product__Slideshow--zoomable Carousel" data-flickity-config="{
                        &quot;prevNextButtons&quot;: false,
                        &quot;pageDots&quot;: true,
                        &quot;adaptiveHeight&quot;: true,
                        &quot;wrapAround&quot;: false,
                        &quot;watchCSS&quot;: true,
                        &quot;dragThreshold&quot;: 8,
                        &quot;initialIndex&quot;: 0
                        }">
                        
                        <!-- <button class="btn btn-default" onclick="PrintItem()">Print</button> -->
                        <?php 
                        if($image_data3!='')
                        {
                            ?>
                            <br/><br/>
                            <h2 style="font-size:1.3em; text-align:center"><u>Bd Proceeding Image</u></h2>
                            <div class="Product__SlideItem Product__SlideItem--image Carousel__Cell">
                                <div class="AspectRatio AspectRatio--withFallback" style="padding-bottom: 88.27586206896552%; --aspect-ratio: 1.1328125;">
                                    <?php echo "<img class='Image--fadeIn lazyautosizes Image--lazyLoaded' src='data:image/png;base64,{$BdProceedingImg}' alt='Picture is not uploaded' data-widths='[200,400,600,700,800,900,1000,1200,1400]' data-sizes='auto' data-expand='-100' data-max-width='1450' data-max-height='1280'"; ?>
                                </div>
                            </div>

                            <br/><br/>
                            <h2 style="font-size:1.3em; text-align:center"><u>Item Image</u></h2>
                            <div class="Product__SlideItem Product__SlideItem--image Carousel__Cell" data-image-position-ignoring-video="0" data-image-position="0" data-image-id="12854349004915" style="">
                                <div class="AspectRatio AspectRatio--withFallback" style="padding-bottom: 88.27586206896552%; --aspect-ratio: 1.1328125;">
                                    <?php echo "<img class='Image--fadeIn lazyautosizes Image--lazyLoaded' src='data:image/png;base64,{$encoded_image}' alt='Picture is not uploaded' data-widths='[200,400,600,700,800,900,1000,1200,1400]' data-sizes='auto' data-expand='-100' data-max-width='1450' data-max-height='1280'"; ?>
                                </div>
                            </div>
                            <?php
                        }
                        else
                        {
                            ?>
                        <div class="Product__SlideItem Product__SlideItem--image Carousel__Cell" data-image-position-ignoring-video="0" data-image-position="0" data-image-id="12854349004915" style="">
                            <div class="AspectRatio AspectRatio--withFallback" style="padding-bottom: 88.27586206896552%; --aspect-ratio: 1.1328125;">
                                <?php echo "<img class='Image--fadeIn lazyautosizes Image--lazyLoaded' src='data:image/png;base64,{$encoded_image}' alt='Picture is not uploaded' data-widths='[200,400,600,700,800,900,1000,1200,1400]' data-sizes='auto' data-expand='-100' data-max-width='1450' data-max-height='1280'"; ?>
                            </div>
                        </div>
                        <br/><br/><h2 style="font-size:1.3em; text-align:center"><u>Min Sheet</u></h2>
                        <div class="Product__SlideItem Product__SlideItem--image Carousel__Cell" data-image-position-ignoring-video="0" data-image-position="0" data-image-id="12854349004915" style="">
                            <div class="AspectRatio AspectRatio--withFallback" style="padding-bottom: 88.27586206896552%; --aspect-ratio: 1.1328125;">
                                <?php echo "<img class='Image--fadeIn lazyautosizes Image--lazyLoaded' src='data:image/png;base64,{$minsheetPic}' alt='Picture is not uploaded' data-widths='[200,400,600,700,800,900,1000,1200,1400]' data-sizes='auto' data-expand='-100' data-max-width='1450' data-max-height='1280'"; ?>
                            </div>
                        </div>
                        <?php }?>
                    </div>
            </div>
        </div>
    </div>
      <div class="Product__InfoWrapper">
          <div class="Product__Info" style="top:56px;">
            <div class="Container">
                <div class="ProductMeta">
                    <h1 class="ProductMeta__Title Heading u-h2"><?php echo $lpNo.". ".$item." (".$qty.")"; ?></h1>
                        <div class="ProductMeta__PriceList Heading">
                            <span class="ProductMeta__Price Price Price--normal Text--subdued u-h4" data-money-convertible=""><?php echo "Value in Rs.".$value; ?></span>
                        </div>
                        <div class="ProductMeta__Description Rte">
                            <div class="product-description-slider ui-accordion ui-widget ui-helper-reset" itemprop="description" role="tablist">
                                <h3 class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-accordion-1-header-0" aria-controls="ui-accordion-1-panel-0" aria-selected="true" aria-expanded="true" tabindex="0">
                                    <span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>
                                    Design Notes
                                </h3>
                                <div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" id="ui-accordion-1-panel-0" aria-labelledby="ui-accordion-1-header-0" role="tabpanel" style="display: block;" aria-hidden="false"><meta charset="utf-8">
                                    <p><span>Purchased on <b><?php echo $purchasedOn ?></b></span></p>
                                    <p><span class="c-mrkdwn__br" data-stringify-type="paragraph-break">Category - <b><?php echo $cat; ?></b></span></p>
                                    <p><span class="c-mrkdwn__br" data-stringify-type="paragraph-break">Sub-Category - <b><?php echo $sub_cat; ?></b></span></p>
                                    <p><span class="c-mrkdwn__br" data-stringify-type="paragraph-break">Condition - <b><?php echo $condition; ?></b></span></p>
                                    <p><span class="c-mrkdwn__br" data-stringify-type="paragraph-break">On Charge of - <b><?php echo $onCharge; ?></b></span></p>
                                    <p><span><em>Current Loc: <b><?php echo $currentLoc; ?></b></em></span></p>
                                    <p><span><em>Previous Loc and Date: <b><?php echo $prevLocDate; ?></b></em></span></p>
                                    <p><span><em>Warranty: <b><?php echo $warranty; ?></b></em></span></p>
                                    <!-- <p><span><em>Condemnation Bd: <b><?php echo $condemnationBd; ?></b></em></span></p> -->
                                    <!-- <p><span>Temp Loan Issue on <b><?php echo $tempLoanIssue. "NULL"; ?></b></span></p>
                                    <p><span>Temp Loan Return on <b><?php echo $tempLoanReturn. "NULL"; ?></b></span></p> -->
                                </div>
                            </div>
                        </div>
                </div>
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