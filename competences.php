<?php 

// Commencer par l'appel du controller
// require(controllers/...)
require("./controllers/skillController.php");

$controller = new SkillController;
$skills = $controller->readAllSkills();
//TODO: récupérer les skills
//$skills =$controller->...
// Définition de la constante du titre de la page, que nous utilisons dans le head

define("PAGE_TITLE", "Competence");


?>
<?php include("./assets/inc/front/head.php"); ?>

<?php include("./assets/inc/front/header.php"); ?>

<main>

    <!-- TODO: afficher les compétences grâce à une boucle -->
    
    <table class="table">
  <thead>
  
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Skill</th>
      <th scope="col">Niveau</th>
      
    </tr>
  </thead>
  <tbody>
  <?php foreach($skills as $skill) { ?>
    <tr>
      <th scope="row"><?= $skill->id_skill ?></th>
      <td><img src="./assets/image/skills/<?= $skill->picture ?>" class="img-thumbnail " style="width:50px; height:50px; alt="">
                </td>
      <td><?= $skill->name ?></td>
      <td><?=$skill->level ?></td>
    </tr>
  
    <?php } ?>
  </tbody>

</table>

</main>

<?php include("./assets/inc/front/footer.php"); ?>