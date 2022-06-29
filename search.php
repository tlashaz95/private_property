<?php
include 'session.php';
include 'config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Search</title>
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
<script type='text/javascript'>
  $(document).ready(function(){
       $('#criteria').change(function(){
           if ($(this).val() == 'Date') {
               $('#from_date').css({'display':'block'});
               $('#to_date').css({'display':'block'});
               $('#searchBox').css({'display':'none'});           
           }
           else 
           {
               $('#from_date').css({'display':'none'});
               $('#to_date').css({'display':'none'});
               $('#searchBox').css({'display':'block'});  
           }
        });
  });

    function showInUse()
    {
        document.getElementById('Condemned').style.display ='none';
        document.getElementById('inUse').style.display = 'block';
    }
    function showCondemned(){
        document.getElementById('Condemned').style.display = 'block';
        document.getElementById('inUse').style.display = 'none';
    }
</script>
<style>
    .search
    {
        width:40%;
        margin-left:30%;
        padding:5px 10px;
        border:1px solid #eee;
        color:black;
    }

    .drop{
        background-color: #eee;
        cursor: pointer;
    }

    .radioBtn{
        padding:15%;
        margin:5%;
    }

    label{
        margin-right:26%;
        margin-left:2%;
    }

    .cen{
        text-align:center;
    }

    input[type="radio"]{
    -webkit-appearance: radio;
    }

    input[type="checkbox"]{
    -webkit-appearance: checkbox;
    }

    .image-parent {
    max-width: 100px;
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
                        <h2 style="text-transform:uppercase" class="SectionHeader__Heading Heading u-h1">SEARCH HERE</h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                    <?php
                    if($_SESSION['auth'] == "Add/Approve")
                    {
                      ?>
                    <div class="SectionHeader--center">
                        <a href="CondemnationBd.php" class="btn btn-info">Add Items to Condemnation Bd</a>
                    </div>
                    <?php
                    }
                    ?>
                        <form method="post">
                            <br>
                            <label class="search">Select Search Criteria</label>
                            <select name="criteria" id="criteria" class="form-control search">
                                <option>Item Name</option>
                                <option>On Charge of</option>
                                <option>Category</option>
                                <option>Loc</option>
                                <option>Date</option>
                                <!-- <option>Condemnation Bd</option> -->
                            </select>
                            <br/>
                            <div class="col-md-3"></div>
                            <div class="col-md-3">  
                                <input type="text" name="from_date" id="from_date" style="display:none" class="form-control" placeholder="From Date" />  
                            </div>  
                            <div class="col-md-3">  
                                <input type="text" name="to_date" id="to_date" style="display:none" class="form-control" placeholder="To Date" />
                            </div><br/>
                            <div class="col-md-4"></div>
                            <div class="col-md-5">
                                <input type="radio" name="searchDiv" checked="checked" value="In Use" class="radioBtn" onclick="showInUse()"/><label>In Use</label>
                                <input type="radio" name="searchDiv" value="Condemnation Bd" class="radioBtn" onclick="showCondemned()"/><label>Condemnation Bd</label>
                            </div><br><br>
                            <input type="text" name="item" id="searchBox" class="form-control search" placeholder="Enter Query to search"/>
                            <div id="itemList" style="padding:0px;" class="search"></div>
                            <input type="submit" name="search" id="filter" style="padding:10px; margin-top:10px; margin-bottom:10px" value="Search this item" class="btn btn-warning search"/>
                        </form>
                        <?php
                        if(isset($_POST['search']))
                        {
                            $searchItem = $_POST['item'];
                            $criteria = $_POST['criteria'];
                            $from_date = $_POST['from_date'];
                            $to_date = $_POST['to_date'];

                            if(isset($_POST["from_date"], $_POST["to_date"]) || isset($searchItem))
                            {  
                                if($criteria=="Item Name")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND item LIKE '%".$searchItem."%'";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND item LIKE '%".$searchItem."%'";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND item='".$searchItem."'";
                                }
                                else if($criteria == "On Charge of")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND onCharge='".$searchItem."'";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND onCharge='".$searchItem."'";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND onCharge='".$searchItem."'";
                                }
                                else if($criteria == "Category")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND category LIKE '%".$searchItem."%'";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND category LIKE '%".$searchItem."%'";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND category='".$searchItem."'";
                                }
                                else if($criteria == "Loc")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND currentLoc='".$searchItem."'";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND currentLoc='".$searchItem."'";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND currentLoc='".$searchItem."'";
                                }
                                else if($criteria == "Date")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND (datePurchased BETWEEN '".$from_date."' AND '".$to_date."')";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND (datePurchased BETWEEN '".$from_date."' AND '".$to_date."')";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND (datePurchased BETWEEN '".$from_date."' AND '".$to_date."')";
                                }
                                else if($criteria == "Condemnation Bd")
                                {
                                    $itemQuery = "select * from up where itemCondition='Svc' AND condemnationBd='".$searchItem."'";
                                    $itemSum = "select SUM(value) AS totalCost from up where itemCondition='Svc' AND condemnationBd='".$searchItem."'";
                                    $itemCondemn = "select * from up where itemCondition!='Svc' AND condemnationBd='".$searchItem."'";
                                }
                                $result = $conn->query($itemQuery);
                                $resultCondemn = $conn->query($itemCondemn);
                                $resultSum = $conn->query($itemSum);

                                if($resultSum->num_rows > 0)
                                {
                                    while($row = $resultSum->fetch_assoc())
                                    {
                                        $totalCost = $row['totalCost'];
                                    }
                                }
                            }
                            else
                            {
                                echo '<script>alert("Please select a criteria and enter details !");</script>';
                            }
                            // if($result->num_rows > 0)
                            // {
                            //     while($row=$result->fetch_assoc())
                            //     {
                            //         $totalCost = $row['totalCost'];
                            //     }
                            // }
                            ?>
                            <div style="text-align: center" id="inUse" class="col-md-12">
                                <h2 style="text-align: center"><u><b>In Use (Total Value - <?php echo $totalCost; ?>)</b></u></h2>
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
                                        <div style="margin-bottom:30%; margin-top:25%;" class="ProductItem ">
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
                                                    <!-- <span class="ProductItem__Price Price Price--normal Text--subdued">Condemnation Bd - <?php echo $row['condemnationBd']; ?></span> -->
                                                </div>
                                                <?php
                                                if($_SESSION['auth'] == "Master")
                                                {
                                                  ?>
                                                <div class="ProductItem__Info ProductItem__Info--center">
                                                    <a href="editItem.php?id=<?php echo $row['itemID']?>" class="btn btn-warning" style="width:100%;">Edit</a>
                                                    <br/><br/>
                                                    <a href="deleteItem.php?id=<?php echo $row['itemID'] ?>" onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-danger" style="width:100%;">Delete</a>
                                                    <br/><br/>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<div class='col-md-12 cen'>No items found</div>";
                            }
                            ?>
                            </div>
                        </div>
                            
                        <div style="display:none;" id="Condemned" class="col-md-12">
                            <h3 style="text-align: center"><u><b>Condemned Items</b></u></h3>
                            <?php

                            if ($resultCondemn->num_rows > 0) 
                            {
                                while($row = $resultCondemn->fetch_assoc()) 
                                {
                                    $image_data = $row['picture'];
                                    $encoded_image = base64_encode($image_data);
                                    ?>
                                    <!-- Products 1 -->
                                    <div class="Grid__Cell 1/2--phone 1/2--tablet 1/4--lap-and-up">
                                        <div style="margin-bottom:30%; margin-left:10%;" class="ProductItem ">
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
                                                    <span class="ProductItem__Price Price Price--normal Text--subdued">Item Condition - <?php echo $row['itemCondition']; ?></span>
                                                </div>
                                                <?php
                                                if($_SESSION['auth'] == "Master")
                                                {
                                                  ?>
                                                <div class="ProductItem__Info ProductItem__Info--center">
                                                    <a href="editItem.php?id=<?php echo $row['itemID']?>" target="_blank" class="btn btn-warning" style="width:100%;">Edit</a>
                                                    <br/><br/>
                                                    <a href="deleteItem.php?id=<?php echo $row['itemID'] ?>" onClick="javascript: return confirm('Please confirm deletion');" class="btn btn-danger" style="width:100%;">Delete</a>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<div class='col-md-12 cen'>No items found</div>";
                            }
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
        <script>
            $(document).ready(function()
            {
                $('#searchBox').keyup(function()
                {
                    var query = $(this).val();
                    var criteria = $('#criteria').val();
                    //alert(criteria);
                    if(query!=' ')
                    {
                        $.ajax({
                            url: "searchItem.php",
                            method:"POST",
                            data:{query:query, criteria:criteria},
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

      $(document).ready(function(){  
           $.datepicker.setDefaults({  
                dateFormat: 'dd-mm-yy'   
           });  
           $(function(){  
                $("#from_date").datepicker({dateFormat: 'dd-mm-yy'});  
                $("#to_date").datepicker({dateFormat: 'dd-mm-yy'});  
           });  
        //    $('#filter').click(function(){  
        //         var from_date = $('#from_date').val();  
        //         var to_date = $('#to_date').val();  
        //         if(from_date != '' && to_date != '')  
        //         {  
        //              $.ajax({  
        //                   url:"filter.php",  
        //                   method:"POST",  
        //                   data:{from_date:from_date, to_date:to_date},  
        //                   success:function(data)  
        //                   {  
        //                        $('#order_table').html(data);  
        //                   }  
        //              });  
        //         }  
        //         else  
        //         {  
        //              alert("Please Select Date");  
        //         }  
        //    });  
      });  
        </script>
        <!-- Footer -->
        <!-- <?php include 'footer.php'; ?> -->
    </div>
  </div>
</body>
</html>