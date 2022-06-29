<?php include 'session.php'; 
$enteredBy = $_SESSION['upadmin'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Add Acct</title>
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
        letter-spacing: 3px;
        font-size:1.5em;
    }
</style>
</head>
<body id="overlay">	
    <?php include 'navbar.php';
    ?>

    <div id="rest" class="page-container">              
    <?php include 'header.php'; ?>

        <div id="items" class="shopify-section shopify-section--bordered">
            <section class="Section Section--spacingNormal">
                <header class="SectionHeader SectionHeader--center">
                    <div class="Container">
                        <h2 class="SectionHeader__Heading Heading u-h1">ADD ACCT</h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <div class="col-md-3"></div>
                            <!-- Login Form -->
                            <div class="col-md-6">
                                <form action="#" method="post" class="form">
                                    <div class="form-group">
                                        <label>Name <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="name" class="txtBox" placeholder=" Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Appt <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="appt" class="txtBox" placeholder="Appt" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Username <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="text" name="uname" class="txtBox" placeholder="Username" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password <span style="color:#c80404; font-size:1.2em;">*</span></label><br/>
                                        <input type="password" name="password" class="txtBox" placeholder="Password" required/>
                                    </div>
                                    <div class="form-group">
                                        <label>Access Auth</label><br/>
                                        <select name="auth" class="txtBox">
                                            <option>Add</option>
                                            <option>Add/Approve</option>
                                            <option>Master</option>
                                        </select>
                                    </div>
                                    <div style="text-align:center;" class="form-group">
                                        <input type="submit" name="addAcct" value="CREATE ACCT" style="border:black" class="btnn"/>
                                    </div>
                                    <br/><br/>
                                </form> 
                            </div>
                            <div class="col-md-3"></div>
                            <?php
                            if(isset($_POST['addAcct']))
                            {
                                $name = $_POST['name'];
                                $appt = $_POST['appt'];
                                $uname = $_POST['uname'];
                                $pwd = $_POST['password'];
                                $auth = $_POST['auth'];
                                $status = "Pending";
                                $date_created = date('H:i:s d-m-Y', strtotime('+5 hours'));

                                $addAcctRequest = "INSERT INTO acct_approval (username, pwd, name, appt, auth, date_created, status)
                                 VALUES 
                                ('".$uname."', '".$pwd."', '".$name."', '".$appt."', '".$auth."', '".$date_created."', '".$status."')";
                                //$result = $conn->query($addItem);
                                $ins = $conn->query($addAcctRequest);
                                if($ins===TRUE)
                                {
                                    echo "<div style='margin-left:35%; font-size:18px' class='alert-success col-md-4'>Acct Request has been submitted!<br><br></div>";
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