<?php include("header.php"); ?>
<?php include("class_lib.php"); ?>

            <div id="content" class="clearfix">
                <aside>
                        <h2><?php echo date("l") . "'s"; ?> Specials</h2>
                        <hr>
                        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
                        <?php
                           $spec = new Menuitem("The WP Burger","Freshly made all-beef patty served up with homefries","$14.00");
                           echo "<h3>" . $spec->get_menuitem() . "</h3>";
                           echo "<p>" . $spec->get_desc() . " - " . $spec->get_price() . "</p>";
                        ?>
                        <hr>
                        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                        <?php
                           $spec2 = new Menuitem("WP Kebobs","Tender cuts of beef and chicken, served with your choice of side","$17.00");
                           echo "<h3>" . $spec2->get_menuitem() . "</h3>";
                           echo "<p>" . $spec2->get_desc() . " - " . $spec2->get_price() . "</p>";
                        ?>
                        <hr>
                </aside>
                <div class="main">

                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>
                    <?php
					   $mi = new Menuitem("Soup & Sandwich","Homemade soup made daily.","$9.99");
                       echo "Come on it and enjoy our <b>" . $mi->get_menuitem() . "</b> daily special at the low price of <u><strong>"  . $mi->get_price() . "</strong></u></br></br>";
                       $mi2 = new Menuitem("Appetizers","","$7.99");
                       echo "Or stop in later in the day during happy hour to enjoy our <b>" . $mi2->get_menuitem() . "</b> for <u><strong>"  . $mi2->get_price() . "</strong></u> each from 3pm - 5pm</br>";
                    ?>
                    </p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
<?php include("footer.php"); ?>