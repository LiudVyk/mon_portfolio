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

<div class="container  flex-wrap">
<?php

//var_dump($projects);
foreach ($projects as $projet){
 
  $projet->afficheInfos();

}
?>
</div></div>
</main>

<?php include("./assets/inc/front/footer.php");?>