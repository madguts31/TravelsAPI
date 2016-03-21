<?php
session_start();
require ('base.php');
?>
<html>
    <body
        <header>
            <nav class="top-nav teal darken-2">
                <div class="container">
                    <div class="nav-wrapper teal darken-2"><a class="page-title">Khushi World Travel</a></div>

                </div>
            </nav>
        </header>
        <div class="container">

            <div id="input" class="section scrollspy">

                <h4 class="header">Enter login details..</h4>
                <form class="col s12" method="POST"  action="userHandler.php">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="uemail" type="email" class="validate" name="uemail">
                            <label for="uemail" data-error="wrong">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="upass" type="password" required name="upass">
                            <label for="upass">Password</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="login">Login</button>
                    <?php
                    if (isset($_SESSION["msg"])) {
                        echo "<div class='chip'>" . $_SESSION['msg'] . "<i class='material-icons'>close</i></div>";
                        $_SESSION['msg'] = NULL;
                    }
                    ?>
                </form>

                <div class="row">
                    <div class="input-field col s6">

                        <blockquote> 
                            <h5> Trouble Logging ..!!</h5><a class="waves-effect waves-light btn teal darken-2">Forgot Password</a>
                        </blockquote>
                    </div>

                    <div class="input-field col s6">
                        <blockquote> 
                            <h5> New user ..!! Create Account </h5><a class="waves-effect waves-light btn teal darken-4" href="#signup">Sign Up</a>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div id="signup" class="section teal darken-2">
            <div class="container">

                <h3 color="white">Sign Up</h3>
            </div>
        </div>

        <div id="signup" class="section">

            <div class="container">
                <form class="col s12" method="POST"  action="userHandler.php" onsubmit="if (document.getElementById('human').checked) {
                                return true;
                            } else {
                                alert('Hello Robot..!!');
                                return false;
                            }">
                      <div class="row">
                        <div class="input-field col s6">
                            <select class="browser-default" name='gender' id='gender'>								
                                <option value='Mr.'>Mr.</option>
                                <option value='Mrs.'>Mrs.</option>
                                <option value='Miss.'>Miss</option>
                                <option value='Ms.'>Ms.</option>									
                            </select>
                        </div>


                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="uname" type="text" required name="uname">
                            <label for="uname">User Name</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="uemail" type="email" required name="uemail">
                            <label for="uemail">User Email</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_phone_msg</i>
                            <input id="uphone" type="tel" required name="uphone" length="10">
                            <label for="uphone">User Phone No</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="upass" type="password" required name="upass1">
                            <label for="upass1">Password</label>
                        </div>

                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="upass2" type="password" required name="upass2">
                            <label for="upass2">Confirm Password</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="uaddress" class="materialize-textarea"></textarea>
                            <label for="uaddress">Address</label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="input-field col s12">
                            <select class="browser-default" id="security" name="security">
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="checkbox" id="human" name="human">
                            <label for="human">I am a human and not a robot</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <button class="btn waves-effect waves-light teal lighten-2" type="submit" name="login">Login</button>

                            <button class="btn waves-effect waves-light teal lighten-2" type="reset" >Reset</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>

    </body>
</html>
