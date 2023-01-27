<?php
require_once("./conf/conf.php");
require_once("./models/project.php");
class ProjectController {
  public function redAll() :array{
    global $pdo;
    $sql = "SELECT * FROM project";
    $stetemend = $pdo->prepare($sql);
    $stetemend->execute();
    $result = $stetemend->fetchAll(PDO::FETCH_CLASS, "ProjectModel");
    return $result;
  }
 
}

?>