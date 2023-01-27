<?php

class ProjectModel
{

  public int $id_project;
  public string $name;

  public string $description;

  public string $date_start;
  public ?string $date_end;
  public ?string $link_site;
  public ?string $link_git;
  public ?string $cover;


  
//public function displayDateS

  public function afficheInfos()
  { ?>
 
 
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <img src="./assets/image/project/<?=$this->cover?>" class="card-img-top" alt="...">
    <h5 class="card-title"><?= $this->name ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text"><?= $this->description ?></p>
    <p class="card-text">Date start <?= $this->date_start ?></p>
    <p class="card-text"> Date end <?= $this->date_end ?></p>
    <a href="#" class="card-link"> Link site</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
</div>
  </div>
 <?php }
}

?>