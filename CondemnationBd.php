<?php
include 'session.php';
include 'config.php';

// Pagination Code
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}

$no_of_records_per_page = 12;
$offset = ($pageno-1) * $no_of_records_per_page;

// Pagination Code continues
$total_pages_sql = "SELECT COUNT(*) FROM up";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

// All items query
$AllItemsQuery = "select * from up where itemCondition='Svc' LIMIT $offset, $no_of_records_per_page";
$resultAllItems = $conn->query($AllItemsQuery);

?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Condemnation Bd</title>
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
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

<style>
    input[type="checkbox"]{
    -webkit-appearance: checkbox;
    }
</style>
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
                        <h2 style="text-transform:uppercase" class="SectionHeader__Heading Heading u-h1">Add Items to Condemnation Bd</h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">

                    <!-- Pagination -->
                        <ul class="pagination" style="padding-left: 40%;;">
                            <li><a href="?pageno=1">First</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                        </ul>

                        <form method="post" action="#" class="form col-md-12" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="item" id="searchBox" class="form-control search" placeholder="Enter Item to search"/>
                                <div id="itemList" style="padding:0px;" class="search"></div>
                                <input type="submit" name="search" value="Search" style="background-color:#5bc0de; padding:10px; color:white; margin-top:10px;" class="btn btn-warning form-control"/>
                            </div>
    
                            <div class="form-group col-md-5 col-lg-offset-5">
                                <label>Bd Proceeding Image <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                <input type="file" name="BdProceedingImg" class="txtBox"/><br>
                                <input type="submit" name="AddToBd" value="Add Items to Bd" style="background-color:#5bc0de; padding:10px; color:white" class="btn btn-default"/>
                            </div>

                        <div class="ProductList ProductList--grid ProductList--removeMargin Grid" data-mobile-count="2" data-desktop-count="4">
                                
                            <?php
                                // Show searched items
                                if(isset($_POST['search'], $_POST['item']))
                                {
                                    ?>
                                    <style>
                                    .allItems{
                                        display: none;
                                    }</style>
                                    <?php
                                    $searchItem = $_POST['item'];
                                    $showQuery = "select * from up where itemCondition='Svc' AND item LIKE '%".$searchItem."%'";
                                    $resultSearch = $conn->query($showQuery);
                                    if($resultSearch->num_rows > 0)
                                    {
                                        while($row = $resultSearch->fetch_assoc())
                                        {
                                            $itemImage = $row['picture'];
                                            $encoded_itemImage = base64_encode($itemImage);
                                            ?>
                                            <div class="Grid__Cell 1/2--phone 1/2--tablet 1/4--lap-and-up">
                                                <div class="ProductItem "><hr>
                                                    <div class="ProductItem__Wrapper">
                                                        <input type="checkbox" name="BdItem[]" value="<?= $row['itemID']; ?>">
                                                        <h2 name=><b><?php echo $row['lpNo']." - ".$row['item']; ?></b></h2>
                                                        <div class="AspectRatio Product__Available  AspectRatio--tall" style="max-width: 150px;">
                                                            <?php echo "<img src='data:image/png;base64,{$encoded_itemImage}' alt='Picture is not uploaded'/>"; ?>
                                                            <span class="Image__Loader"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No item found !";
                                    }
                                }
                                else
                                {
                                    echo "Enter an item to search.";
                                }
                                // Show all items
                                if ($resultAllItems->num_rows > 0) 
                                {
                                    while($row = $resultAllItems->fetch_assoc()) 
                                    {
                                        $itemImage = $row['picture'];
                                        $encoded_itemImage = base64_encode($itemImage);
                                        ?>
                                        <!-- Items -->
                                        <div class="Grid__Cell 1/2--phone 1/2--tablet 1/4--lap-and-up">
                                            <div class="ProductItem allItems"><hr>
                                                <div class="ProductItem__Wrapper">
                                                    <input type="checkbox" name="BdItem[]" value="<?= $row['itemID']; ?>">
                                                    <h2 name=><b><?php echo $row['lpNo']." - ".$row['item']; ?></b></h2>
                                                    <div class="AspectRatio Product__Available  AspectRatio--tall" style="max-width: 150px;">
                                                        <?php echo "<img src='data:image/png;base64,{$encoded_itemImage}' alt='Picture is not uploaded'/>"; ?>
                                                        <span class="Image__Loader"></span>
                                                    </div>
                                                </div>
                                                <!-- <div class="ProductItem__Info ProductItem__Info--center">
                                                    <div class="ProductItem__PriceList  Heading">
                                                        <span class="ProductItem__Price Price Price--normal Text--subdued">Value in Rs. <?php echo $row['value']; ?></span>
                                                    </div>
                                                    <div class="ProductItem__PriceList  Heading">
                                                        <span class="ProductItem__Price Price Price--normal Text--subdued">On Charge of - <?php echo $row['onCharge']; ?></span>
                                                    </div>
                                                </div> -->
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
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?php
            if(isset($_POST['AddToBd'], $_POST['BdProceedingImg']))
            {
                if(isset($_POST['BdProceedingImg']))
                {
                    $BdImage = addslashes(file_get_contents($_FILES['BdProceedingImg']['tmp_name']));

                    // Update UP Tbl
                    if(isset($_POST['BdItem']))
                    {
                        foreach($_POST['BdItem'] as $BdID)
                        {
                            $multipleBdItems = "update up set itemCondition='Condemnation Bd', bdProceedingImg='".$BdImage."' where itemID=".$BdID;
                            $update = $conn->query($multipleBdItems);
                            //mysqli_query2($con,$deleteUser);
                        }
                        if($update === TRUE)
                        {
                            echo '<script type="text/javascript">alert("Selected items have been added to Condemnation Bd");</script>';
                        }
                    }
                }
                else
                {
                    echo '<script type="text/javascript">alert("Bd Proceeding Img must be selected");</script>';
                }
            }
        ?>
        <!-- Footer -->
        <!-- <?php include 'footer.php'; ?> -->
    </div>
    <script>
            $(document).ready(function()
            {
                $('#searchBox').keyup(function()
                {
                    var query = $(this).val();
                    //alert(criteria);
                    if(query!=' ')
                    {
                        $.ajax({
                            url: "searchItem.php",
                            method:"POST",
                            data:{query:query},
                            success:function(data)
                            {
                                $('#itemList').fadeIn();
                                $('#itemList').html(data);
                            }
                        })
                    }
                    else
                    {
                        $('#itemList').fadeIn();
                        $('#itemList').html(data);
                    }
                });

                $(document).on('click','li', function(){
                    $('#searchBox').val($(this).text());
                    $('#itemList').fadeOut();
                });

                $(document).mouseup(function(e){
                    var container = $("#itemList");

                    // If the target of the click isn't the container
                    if(!container.is(e.target) && container.has(e.target).length === 0){
                        container.hide();
                    }
                });
            });
    </script>
</body>
</html>