
<?php
require ('base.php');
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

    <body>

        <!-- Dropdown Structure -->
        <ul id="travel" class="dropdown-content">
            <li><a href="view.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="view.php">Update<i class="small material-icons left">library_books</i></a></li>
            <li><a href="booking.php">Delete<i class="small material-icons left">delete</i></a></li>

        </ul>

        <ul id="tour" class="dropdown-content">
            <li><a href="addFoodItem.php">Add<i class="small material-icons left">library_add</i></a></li>
            <li><a href="updateFoodItem.php">Update<i class="small material-icons left">library_books</i></a></li>            
            <li><a href="removeFoodItem.php">Delete<i class="small material-icons left">delete</i></a></li>
        </ul>

        <ul id="service" class="dropdown-content">
            <li><a href="addAlbum.php">Add Album<i class="small material-icons left">note_add</i></a></li>
            <li><a href="addPhoto.php">Add Photos<i class="small material-icons left">library_add</i></a></li>
            <li><a href="delAlbum.php">Delete<i class="small material-icons left">delete</i></a></li>            
        </ul>

        <ul id="account" class="dropdown-content">
            <li><a href="addAlbum.php">Logout<i class="small material-icons left">power_settings_new</i></a></li>
            <li><a href="addPhoto.php">Update<i class="small material-icons left">library_books</i></a></li>
        </ul>


        <nav class="white" role="navigation">
            <div class="nav-wrapper teal">

                <ul class="left hide-on-med-and-down">
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="travel">Travel Package<i class="large material-icons left">room</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="tour">Tour Package<i class="large material-icons left">shopping_basket</i></a></li>
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="service">Manage Service<i class="large material-icons left">perm_media</i></a></li>

                    <li><a href="viewEvent.php">Customer Query<i class="small material-icons left">hearing</i></a></li>
                    <li><a href="feedWatcher.php">Feedback<i class="small material-icons left">loyalty</i></a></li>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-button" href="javascript:void(0)" data-beloworigin="true" data-activates="account"><?php echo $_SESSION['emp']; ?><i class="large material-icons left">perm_identity</i></a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">

                    <ul class="collapsible collapsible-accordion">
                        <li><a class="button-collapse"><i class="material-icons large">room</i></a></li>
                        <li><a class="collapsible-header active waves-effect waves-teal bold">Travel</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="color.html">Add Package</a></li>
                                    <li><a href="grid.html">Update Package</a></li>
                                    <li><a href="helpers.html">Delete Package</a></li>
                                    <li><a href="media-css.html">Extra</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="button-collapse"><i class="material-icons large">shopping_basket</i></a></li>
                        <li><a class="collapsible-header  waves-effect waves-teal bold">Tour</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="badges.html">Add Tour</a></li>
                                    <li><a href="buttons.html">Update Tour</a></li>
                                    <li><a href="breadcrumbs.html">Delete Tour</a></li>
                                    <li><a href="cards.html">Extra</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="button-collapse"><i class="material-icons large">perm_media</i></a></li>
                        <li><a class="collapsible-header  waves-effect waves-teal bold">Service</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="badges.html">Add Service</a></li>
                                    <li><a href="buttons.html">Update Service</a></li>
                                    <li><a href="breadcrumbs.html">Delete Delete</a></li>
                                    <li><a href="cards.html">Extra</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="button-collapse"><i class="material-icons large">hearing</i></a></li>
                        <li><a class="collapsible-header  waves-effect waves-teal bold" href="#">Query</a></li>
                        <li><a class="button-collapse"><i class="material-icons large">loyalty</i></a></li>
                        <li><a class="collapsible-header  waves-effect waves-teal bold" href="#">Feedback</a></li>
                        <li><a class="button-collapse"><i class="material-icons large">perm_identity</i></a></li>
                        <li><a class="collapsible-header  waves-effect waves-teal bold"><?php echo $_SESSION['emp']; ?></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="badges.html">Logout</a></li>
                                    <li><a href="buttons.html">Update Account</a></li>

                                </ul>
                            </div>
                        </li>
                    </ul>

                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </body>
</html>

