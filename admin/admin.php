<?php 
session_start();


define("PAGE_TITLE", "Accueil Admin");
require_once("../controllers/accountController.php");
$accountController = new AccountController;
$accountController->isLogged();

?>


<main>

COUCOU
</main>


