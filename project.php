<?php

//Commencer par l'appel du controller
//require(controllers/...)

require("./controllers/projectController.php");



$controller = new ProjectController;
$projects = $controller->redAll();

define("PAGE_TITLE", "Project");
?>

<?php include("./assets/inc/front/head.php"); ?>
<?php include("./assets/inc/front/header.php");?>
<main>
<h1 class="offset-4"> Liste de projets</h1>
<?php

//var_dump($projects);

?>
</main>

<?php include("./assets/inc/front/footer.php");?>