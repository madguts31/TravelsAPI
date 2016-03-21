<?php
session_start();

require("base.php");
?>
<html>
    <head>
        <title>PM - View Booking</title>	
    </head>
    <body>
        <header>
            <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
            <ul id="nav-mobile" class="side-nav fixed">
       
         
                <li class="bold"><a href="travel.php.html" class="waves-effect waves-teal">Travel</a></li>
                <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Getting Started</a></li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Travel</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="color.html">Manage</a></li>
                                    <li><a href="grid.html">View</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Components</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="badges.html">Badges</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                                    <li><a href="cards.html">Cards</a></li>
                                    <li><a href="chips.html">Chips</a></li>
                                    <li><a href="collections.html">Collections</a></li>
                                    <li><a href="footer.html">Footer</a></li>
                                    <li><a href="forms.html">Forms</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="navbar.html">Navbar</a></li>
                                    <li><a href="pagination.html">Pagination</a></li>
                                    <li><a href="preloader.html">Preloader</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">JavaScript</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="collapsible.html">Collapsible</a></li>
                                    <li><a href="dialogs.html">Dialogs</a></li>
                                    <li><a href="dropdown.html">Dropdown</a></li>
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="parallax.html">Parallax</a></li>
                                    <li><a href="pushpin.html">Pushpin</a></li>
                                    <li><a href="scrollfire.html">ScrollFire</a></li>
                                    <li><a href="scrollspy.html">Scrollspy</a></li>
                                    <li><a href="side-nav.html">SideNav</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="transitions.html">Transitions</a></li>
                                    <li><a href="waves.html">Waves</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
                <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Showcase</a></li>
            </ul>
        </header>


        <form method="post" class="col s12"  >
            <div class="row">
                <div class="row">
                    <h2>Select Date</h2>
                    <div class="input-field col s6">
                        <input name="date" type="date" >
                        <button type="submit" name="ser" class="waves-effect waves-light btn">View</button>

                    </div>
                </div>
            </div>
        </form>
        <div class="row">

            <?php
            if (isset($_POST['ser'])) {
                $date = $_POST['date'];


                $conn = mysql_connect("localhost", "root", "");
                mysql_select_db("PM_Banq", $conn);
                $qry = "SELECT * FROM booking_status WHERE date= '$date'";

                $result = mysql_query($qry, $conn);
                while ($row = mysql_fetch_assoc($result)) {
                    $resultset[] = $row;
                }
                if (!empty($resultset)) {
                    foreach ($resultset as $key => $value) {
                        ?>

                        <div class="col s12 m5">
                            <div class="card-panel teal">
                                <h4 class="white-text"><?php echo $resultset[$key]["session"]; ?></h4>
                                <span class="white-text">Booked By  :  <?php echo $resultset[$key]["booking_id"]; ?></span><br>
                                <span class="white-text"><?php echo $resultset[$key]["last_modified"]; ?></span>

                            </div>
                        </div>
        <?php
        }
    } else {
        echo "Select Another Date";
    }
}
?>
        </div>     




    </body>
</html>

