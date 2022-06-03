<?php

require_once("db.php");
$title = "Home";
$content ='';

$movie_id=(int) $_GET['id'];
$stm1 = $con->prepare("select * from movies where id='$movie_id'");
$stm1->execute();
$m = $stm1->fetch();

$content .= '<br><div class="container"><div class="row">
<div class="col">
<div class="card mb-3">
<img src="files/pics/'.$m['image'].'"  class="card-img-top poster-main" alt="'.$m['movie_name'].'">
<div class="card-body">
  
</div>
</div></div>
<div  class="col">
<h5 class="card-title">'.$m['movie_name'].'</h5>
<h4>Description</h4>
<p class="card-text">'.$m['description'].'</p>
<h4>Actors</h4>
<p class="card-text">'.$m['actors'].'</p>
<h4>Director</h4>
<p class="card-text">'.$m['director'].'</p>
<p class="card-text"><small class="text-muted">'.$m['year'].'</small></p>

<p class="card-text"><a href="download.php?id='.$m['id'].'">Download</a></p>
</div>

';

require_once("template/index.php");

?>