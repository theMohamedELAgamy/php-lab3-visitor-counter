<?php

$message="";

require_once("vendor/autoload.php");

if(!isset($_SESSION["flag"])){
session_start();
$_SESSION["flag"]=false;
}
if(isset($_POST["submit"])){
 
        if(visitor::validate($_POST["username"], $_POST["password"])){
                    counter::startingsession();
                  
                                       header("Location:user.php",true,301);
                                       exit();
        }else $message="incorrect pass or username" ;
        
}






?>
<html>

    <head>
        <title> contact form </title>


    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
        <h3> <?php  echo $message; ?></h3>
    </body>
            
        </div>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="username" class="input" name="username" type="text" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your password:</label><br />
                <input id="password" class="input" name="password" type="password"  size="30" /><br />

            </div>
            

            <input id="submit" name="submit" type="submit" value="login" />
            

        </form>
        
    </body>

</html>