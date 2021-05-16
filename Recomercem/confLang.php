
<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(isset($_GET["lang"]) && $_GET["lang"]!=""){
    if($_GET["lang"]=="en" || $_GET["lang"]=="es" || $_GET["lang"]=="ru" || $_GET["lang"]=="cat"){
        $_SESSION['lang'] = $_GET["lang"];
    }
}
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = "es";
}
require_once "lang/".$_SESSION['lang'].".php";
?>