
<style>
.sidenav {
    height: 100%;
    position: fixed;
    z-index: 1;
    width: 0;
    top: 0;
    left: 0;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
}
</style>
<section id="sidebar-menu" style="transition:0.5s;" class="SidebarMenu Drawer Drawer--small Drawer--fromLeft sidenav" aria-hidden="false" data-section-id="sidebar-menu" data-section-type="sidebar-menu" tabindex="-1">
 
    <a href="javascript:void(0)" class="closebtn" style="position: absolute;
    font-size: 30px;" onclick="closeNav()">&times;</a>
    <br/><br/>
    <div class="Drawer__Content">
      <div class="Drawer__Main" data-drawer-animated-left="" data-scrollable="">
        <div class="Drawer__Container">
          <nav class="SidebarMenu__Nav SidebarMenu__Nav--primary" aria-label="Sidebar navigation">
        
          <?php
          if($_SESSION['auth'] == "Add/Approve")
          {
            ?>
            <div class="Collapsible"><a href="addAcct.php" class="Collapsible__Button Heading Link Link--primary u-h6">CREATE ACCOUNT</a></div>
            <?php
          }
          ?>
          <div class="Collapsible"><a href="search.php" class="Collapsible__Button Heading Link Link--primary u-h6">SEARCH</a></div>
          <div class="Collapsible"><a href="about.php" class="Collapsible__Button Heading Link Link--primary u-h6">ABOUT</a></div>
            <div class="Collapsible">
                <button class="Collapsible__Button Heading u-h6" onclick="myFunction()"  id="p2" aria-expanded="false">
                    eLEDGER
                    <span class="Collapsible__Plus"></span>
                </button>
                <div class="Collapsible__Inner" style="height:auto;">
                    <div class="Collapsible__Content">
                        <div class="Collapsible">
                            <a href="product.php?id=Elec" class="Collapsible__Button Heading Text--subdued Link Link--primary u-h7">Electronics</a>
                        </div>
                        <div class="Collapsible">
                            <a href="product.php?id=Fur" class="Collapsible__Button Heading Text--subdued Link Link--primary u-h7">Furniture</a>
                        </div>
                        <div class="Collapsible">
                            <a href="product.php?id=Clo" class="Collapsible__Button Heading Text--subdued Link Link--primary u-h7">Clothing</a>
                        </div>
                        <div class="Collapsible">
                            <a href="product.php?id=Mess" class="Collapsible__Button Heading Text--subdued Link Link--primary u-h7">Mess Items</a>
                        </div>
                        <div class="Collapsible">
                            <a href="product.php?id=Misc" class="Collapsible__Button Heading Text--subdued Link Link--primary u-h7">MISC</a>
                        </div>
                    </div>
                </div>
            </div>
            
          </nav>
        </div>
      </div>
    </div>
</section>

<script>

function myFunction() {
  var x = document.getElementById("p2").getAttribute("aria-expanded"); 
  if (x == "true") 
  {
  x = "false"
  } else {
  x = "true"
  }
  document.getElementById("p2").setAttribute("aria-expanded", x);
  }
</script>