<?php
require ('base.php');
?>
<html>
    <body
        <header>
            <nav class="top-nav">
                <div class="container">
                    <div class="nav-wrapper"><a class="page-title">Khushi World Travel</a></div>

                </div>
            </nav>
        </header>
        <div class="container">

            <div id="input" class="section scrollspy">

                <h4 class="header">Enter user details..</h4>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">User Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
