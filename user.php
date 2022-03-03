<?php
require_once("vendor/autoload.php");

if(isset($_POST["logout"])){
    logout();
}

dbhandler::connect();
$index = (isset($_GET["index"]) && is_numeric($_GET["index"]) && $_GET["index"] > 0) ? (int) $_GET["index"] : 0;

$next_index =  (($index + _Pager_size_)<=15)?$index + _Pager_size_:0;
$next_link = "http://localhost/lab3/user.php?index=$next_index";
$previous_index = (($index - _Pager_size_)>=0)?$index - _Pager_size_:0;
$previous_link = "http://localhost/lab3/user.php?index=$previous_index";
dbhandler::get_data($index);
if(isset($_POST["getdata"]) &&isset($_POST["glassesid"])){
    dbhandler::get_record($_POST["glassesid"]);
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
        <div> 
    <a href="<?php echo $previous_link;  ?>"> << Prev </a> | <a href="<?php echo $next_link;  ?>">  Next >> </a>
        </div>
        <form action="#" method="POST">
    <center>
        <h3>welcome user</h3></br>
        <input name="logout" type="submit" value="log out" />
    </center>
    </form>
              <form action="#" method="POST">
    <center>
                <label class="required" for="name">glasses id:</label><br />
                <input id="username" class="input" name="glassesid" type="number" size="30" /><br />
        <input name="getdata" type="submit" value="get glasses" />
    </center>
    </form>
    </body>
</html>

