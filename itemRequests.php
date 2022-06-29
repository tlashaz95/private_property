<?php
include 'session.php';
include 'config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Acct Requests</title>
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
<link href="css/_table.scss" rel="stylesheet" type="text/css" media="all"/>
<link href="css/bold-upsell-custom.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->

<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body id="overlay">	
    

    <!-- Nav bar -->
    <?php include 'navbar.php'; ?>

    <div id="rest" class="page-container">              
        <?php include 'header.php'; ?>
        <div id="items" style="border-top:1px solid #dcdcdc" class="shopify-section shopify-section--bordered">
            <section class="Section Section--spacingNormal">
                <header class="SectionHeader SectionHeader--center">
                    <div class="Container">
                        <h2 style="text-transform:uppercase" class="SectionHeader__Heading Heading u-h1">ITEM REQUESTS</h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <?php

                        $acctRequests = "SELECT * FROM item_approval WHERE status='Pending'";
                        $result = $conn->query($acctRequests);

                        if($result->num_rows > 0)
                        {
                            ?>
                            <table class="table table-dark table-striped table-responsive">
                                <thead class="table-dark Modal--dark">
                                    <tr>
                                    <th scope="col">Ser</th>
                                    <th scope="col">LP #</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Item Image</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Min Sheet</th>
                                    <th scope="col">Min Sheet Image</th>
                                    <!-- <th scope="col">Current Loc</th> -->
                                    <th scope="col">On Charge</th>
                                    <th scope="col">Value</th>
                                    <!-- <th scope="col">Date Purchased</th>
                                    <th scope="col">Item Condition</th> -->
                                    <th scope="col">Entered By</th>
                                    <th scope="col">Request Date</th>
                                    <!-- <th scope="col">Status</th> -->
                                    <th></th>
                                    <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php
                            $i=1;
                            while($row = $result->fetch_assoc())
                            {
                                $encoded_itemImage = base64_encode($row['picture']);
                                $encoded_minSheetImage = base64_encode($row['minSheetPic']);
                                ?>
                                    <tr>
                                    <th><?php echo $i; ?></th>
                                    <th scope="row"><?php echo $row['lpNo']; ?></th>
                                    <td><?php echo $row['item']; ?></td>
                                    <td><img src='<?php echo "data:image/png;base64,{$encoded_itemImage}"; ?>' height="250" width="200" alt="Minsheet Image"/></td>
                                    <td><?php echo $row['qty']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['minSheet']; ?></td>
                                    <td><img src='<?php echo "data:image/png;base64,{$encoded_minSheetImage}"; ?>' height="250" width="200" alt="Minsheet Image"/></td>
                                    <!-- <td><?php echo $row['currentLoc']; ?></td> -->
                                    <td><?php echo $row['onCharge']; ?></td>
                                    <td><?php echo $row['value']; ?></td>
                                    <!-- <td><?php echo $row['datePurchased']; ?></td> -->
                                    <!-- <td><?php echo $row['itemCondition']; ?></td> -->
                                    <td><?php echo $row['enteredBy']; ?></td>
                                    <td><?php echo $row['request_date']; ?></td>
                                    <!-- <td><?php echo $row['status']; ?></td> -->
                                    <td></td>
                                    <td>
                                        <a href="approve.php?itemId=<?php echo $row['approval_id'];?>" style="margin-right:20%;"><img src="assets/Approve.png" height="30" width="30"/></a>
                                        <a href="decline.php?itemId=<?php echo $row['approval_id'];?>"><img src="assets/Reject.png" height="30" width="30"/></a>
                                    </td>
                                    </tr>
                                
                                <?php
                                $i++;
                            }
                            ?>
                            </tbody>
                            </table>
                            <?php
                        }
                        else
                        {
                            echo '<div class="alert-danger" style="text-align:center; font-size:1.5em; padding:5px">No Item Requests</div>';
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <!-- <?php include 'footer.php'; ?> -->
    </div>
</body>
</html>