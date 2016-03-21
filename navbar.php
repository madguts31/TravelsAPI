<?php
require ('base.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <body>
        <nav class="white" >
            <div class="nav-wrapper teal">
                <a id="logo-container" href="index.php" class="brand-logo">Khushi World Travel</a>


                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Tour</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">About Us</a></li>
<?php
if (!isset($_SESSION["user"])) {


    echo "<li><a href='login.php' class='button special'>Log in</a></li>";
} else {
    echo "<li><a href='accountInfo.php' class='button'>";
    echo $_SESSION['user'];
    echo "</a></li";
}
?>

                </ul>


                <ul id="nav-mobile" class="side-nav">
                    <li class="bold"><a href="dashboard.php" class="waves-effect waves-teal">Khushi World Travels</a></li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header active waves-effect waves-teal">CSS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li class="active"><a href="color.html">Color</a></li>
                                        <li><a href="grid.html">Grid</a></li>
                                        <li><a href="helpers.html">Helpers</a></li>
                                        <li><a href="media-css.html">Media</a></li>
                                        <li><a href="sass.html">Sass</a></li>
                                        <li><a href="shadow.html">Shadow</a></li>
                                        <li><a href="table.html">Table</a></li>
                                        <li><a href="typography.html">Typography</a></li>
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
                        </ul>
                        <ul><a href="#">Tour</a>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Tour</a></li>
                            <li><a href="#">Tour</a></li>

                            <li><a href="#">Tour</a></li>
                        </ul>
                    </li>

                </ul>

                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </body>
</html>

