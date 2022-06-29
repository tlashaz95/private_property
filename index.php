<?php 
session_start();

if(isset($_SESSION['upadmin'])) 
{
    echo '<script type="text/javascript">alert("You are already logged in !);</script>';
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>eLedger | Home</title>
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
        font-size:1.2em;
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
                        <h2 class="SectionHeader__Heading Heading u-h1">LOGIN HERE</h2>
                    </div>
                </header>
                <div class="TabPanel" aria-hidden="false">
                    <div class="ProductListWrapper Container">
                        <div class="col-md-3"></div>
                            <!-- Login Form -->
                            <div class="col-md-6">
                                <form action="#" method="post" class="form">
                                    <div class="form-group">
                                        <label>Username</label><br/>
                                        <input type="text" name="uname" class="txtBox" placeholder="Username"/>
                                        <br/><br/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label><br/>
                                        <input type="password" name="pwd" class="txtBox" placeholder="Password"/>
                                    </div>
                                    <input type="submit" name="login" value="Login" class="btnn"/>
                                </form> 
                            </div>
                            <div class="col-md-3"></div>
                            <?php
                            if(isset($_POST['login']))
                            {
                                $uname = $_POST['uname'];
                                $pwd = $_POST['pwd'];
                                $admin = "select * from admin where username='".$uname."' AND password='".$pwd."'";
                                $result = $conn->query($admin);
                                if ($result->num_rows > 0)
                                {
                                    $timestamp = date("d-m-Y H:i:s");
                                    $log = "insert into log (username, time) VALUES ('".$uname."', CURRENT_TIMESTAMP)";
                                    $insertLog = $conn->query($log);
                                    
                                    while($row = $result->fetch_assoc())
                                    {
                                        $auth = $row['auth'];
                                    }
                                    $_SESSION['upadmin'] = $uname;
                                    $_SESSION['auth'] = $auth;
                                    echo '<script type="text/javascript">window.location.href="search.php";</script>';
                                }
                                else
                                {
                                    echo "<div style='margin-left:35%; font-size:18px' class='alert-danger col-md-4'>No Admin Found!</div>";
                                }
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
</body>
</html>