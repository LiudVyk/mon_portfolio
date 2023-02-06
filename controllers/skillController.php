<?php
require_once("./conf/conf.php");
require_once("./models/skillModel.php");
class SkillController{
  // TODO: créer les méthodes permettant des récupérer les skills (readAll()...)
public function readAllSkills():array
{
  global $pdo;

  $sql = "SELECT * FROM Skill";

  $statement = $pdo->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll(PDO::FETCH_CLASS, "SkillModel");

  return $result;
}

}