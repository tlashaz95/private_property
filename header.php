<?php
 include 'config.php';

 $pendingAcct = "select * from acct_approval where status='Pending'";
 $accts = $conn->query($pendingAcct);
 $countAcct = $accts->num_rows;

 $pendingItems = "select * from item_approval where status='Pending'";
 $itemsQuery = $conn->query($pendingItems);
 $countItems = $itemsQuery->num_rows;
 ?>
<!-- script-for sticky-nav -->
<script>

// Side nav bar
function openNav() {
  document.getElementById("sidebar-menu").style.width = "340px";
  document.getElementById("overlay").style.backgroundColor = "rgba(0,0,0, 0.9)";
  document.getElementById("items").style.backgroundColor = "#fff";
//   document.getElementById("rest").style.backgroundColor="#363636";
  document.getElementById("rest").style.opacity = "0.5";
}

function closeNav() {
  document.getElementById("sidebar-menu").style.width = "0";
  document.getElementById("overlay").style.backgroundColor = "rgba(256,256,256, 1)";
  document.getElementById("rest").style.opacity = "1";
}

</script>
    <!-- /script-for sticky-nav -->
<style>
  .badge {
  position: absolute;
  padding: 5px 8px;
  border-radius: 50%;
  background-color: red;
  color: white;
} 
</style>

<div style="background:white; height:120px;" class="shopify-section">
                <div style="background-color: #000034;" class="AnnouncementBar">
                    <div class="AnnouncementBar__Wrapper">
                        <img src="assets/logo.png" height="120" width="100"/>
                        <!-- <p class="AnnouncementBar__Content Heading">
                          VOICE OF COMD | THE NINERS
                        </p> -->
                    </div>
                </div>
            </div>

            <div id="shopify-section-header" style="height:55.5px;" class="shopify-section shopify-section--header"><header id="section-header" class="Header Header--sidebar Header--initialized " data-section-id="header" data-section-type="header" data-section-settings="{
  &quot;navigationStyle&quot;: &quot;sidebar&quot;,
  &quot;hasTransparentHeader&quot;: false,
  &quot;isSticky&quot;: true
}" role="banner">
  <div class="Header__Wrapper">
    <div class="Header__FlexItem Header__FlexItem--fill">
      <ul class="HorizontalList HorizontalList--spacingLoose">
        <li class="HorizontalList__Item">
        <span class="Heading Link Link--primary Text--subdued u-h4" onclick="openNav()">MENU</span>
        </li>
        <?php
        if(isset($_SESSION['auth'], $_SESSION['upadmin']))
        {
          if($_SESSION['auth'] == "Master" || $_SESSION['auth'] == "Add" || $_SESSION['auth'] == "Add/Approve")
          {
            ?>
            <li class="HorizontalList__Item">
              <span class="Heading Link Link--primary Text--subdued u-h4"><a href="addItem.php">Add Item</a></span>
            </li>
            <?php
          }
        }
        else
          echo ""; ?>
        <li class="HorizontalList__Item">
        <span class="Heading Link Link--primary Text--subdued u-h4"><a href="overview.php">Summary</a></span>
        </li>
      </ul></div><div class="Header__FlexItem"><h1 class="Header__Logo"><a href="index.php" class="Header__LogoLink">
        <span style="font-size: 32px; font-weight:600; letter-spacing: 0.3em;">eLEDGER</span>
        </a></h1></div>

    <div class="Header__FlexItem Header__FlexItem--fill"><nav class="Header__SecondaryNav hidden-pocket">
          <ul class="HorizontalList HorizontalList--spacingLoose hidden-pocket hidden-lap">
            <li class="HorizontalList__Item">
              <a href="search.php" class="Heading Link Link--primary Text--subdued u-h4" data-action="open-modal" aria-controls="Search">Search</a>
            </li>
            
            
            <?php 
            if(isset($_SESSION['upadmin'], $_SESSION['auth'])) 
            {
              //var_dump($_SESSION['auth']);
              if($_SESSION['auth'] == "Master")
              {
                ?>
                <li class="HorizontalList__Item">
                  <span class="Heading Link Link--primary Text--subdued u-h4">
                    <a href="acctRequests.php">Acct Requests</a>
                    <span class="badge"><?php echo $countAcct; ?></span>
                  </span>
                </li>
                <?php
              }

              if($_SESSION['auth'] == "Add/Approve")
              {
                ?>
                <li class="HorizontalList__Item">
                  <span class="Heading Link Link--primary Text--subdued u-h4">
                    <a href="itemRequests.php">UP Requests
                      <span class="badge"><?php echo $countItems; ?></span>
                    </a>
                  </span>
                </li>
                <?php
              }
                ?>
                <li class="HorizontalList__Item">
                  <a href="logout.php" class="Heading Link Link--primary Text--subdued u-h4" data-action="open-modal" aria-controls="Logout">Logout</a><br>
                  <small><u>Welcome <?php echo $_SESSION['upadmin'];?></u></small>
                </li>
                <?php
            }
            else
            {
              ?>
                <li class="HorizontalList__Item">
                  <a href="index.php" class="Heading Link Link--primary Text--subdued u-h4" data-action="open-modal" aria-controls="Logout">Login</a>
                </li>
                <?php
            } ?>
          </ul>
        </nav>
      
    </div>
  </div>
</header>

<style>:root {
      --use-sticky-header: 1;
    }

    .shopify-section--header {
      position: -webkit-sticky;
      position: sticky;
    }:root {
      --header-is-not-transparent: 1;
      --header-is-transparent: 0;
    }

    .float{
  position:fixed;
  border: .07143rem solid transparent!important;
	width:110px;
	height:48px;
	bottom:15px;
	right:30px;
	background-color:#000;
	color:#FFF;
	text-align:center;
  z-index: 99;
  border-radius: 999rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  font-size: 1.3rem;
  vertical-align: middle;
}

.my-float{
  margin-top:17px;
}
    </style>

<script>
  document.documentElement.style.setProperty('--header-height', document.getElementById('shopify-section-header').offsetHeight + 'px');
</script>

</div>