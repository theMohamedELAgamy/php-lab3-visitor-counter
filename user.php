<?php
require_once("vendor/autoload.php");
if(isset($_POST["logout"])){
    logout();
}
function logout(){
    $_SESSION["flag"]=false;
    counter::write_num_of_visitors("decrease");
    header("Location:default.php",true,301);
                                       exit();
}
?>
<html>
    <head>
        
    </head>
    <body>
        <form action="#" method="POST">
    <center>
        <h3>welcome user</h3></br>
        <input name="logout" type="submit" value="log out" />
    </center>
    </form>
    </body>
</html>

