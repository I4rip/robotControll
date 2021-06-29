<?php
require_once("Database.php");
if(isset($_POST["move"]))
{
    $db = new Database();
    $db->insert_update_delete("update control set current='".$_POST["move"]."' where id='1'");
}
if(isset($_POST["get"]))
{
    $db = new Database();
    $res=$db->getData("select current from control where id='1'");
    $row= mysqli_fetch_row($res);
    echo $row[0];
}
?>