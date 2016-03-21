<?php
session_start();
require ('base.php');
?>
<html>
    <body
        <header>
            <nav class="top-nav teal darken-4">
                <div class="container">
                    <div class="nav-wrapper teal darken-4"><a class="page-title">Khushi World Travel</a></div>

                </div>
            </nav>
        </header>
        <div class="container">

                    <div id="input" class="section scrollspy">

                        <h4 class="header">Enter login details..</h4>
                        <form class="col s12" method="POST"  action="userHandler.php" >
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="uemail" type="email" class="validate" name="uemail">
                                    <label for="uemail" data-error="wrong">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input id="upass" type="password" required name="upass">
                                    <label for="upass">Password</label>
                                </div>
                            </div>
                           
                                <button class="btn waves-effect waves-light red" type="submit" name="login">Login</button>
                                <?php
                                if (isset($_SESSION["msg"])) {
    echo "<div class='chip'>" . $_SESSION['msg'] . "<i class='material-icons'>close</i></div>";
  $_SESSION['msg']=NULL;
}?>
 
                                </form>
                            </div>
            <blockquote> 
                <i class="material-icons small">error</i><h6>Trouble logging in...!!<a href="forgotpass.php">Forgot Password</a></h6>

            </blockquote>
            <blockquote> 
                <h5> New user ..!! Create Account </h5><a class="waves-effect waves-light btn red darken-2">Sign Up</a>

            </blockquote>
                    </div>



                    </html>