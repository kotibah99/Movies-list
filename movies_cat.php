<?php

require_once("db.php");
$title = "About Us";
$content ='';
$catname= trim($_GET['find']);
$stm = $con->prepare("select movies.id,movie_name,description,image,movies.created_date,movies.is_deleted,cat_name from movies,category where category.id=movies.category_id and category.cat_name ='$catname' order by id desc");
$stm->execute();
$data = $stm->fetchAll();
if(!empty($data)){
$content .= '<div class="container">
    <div class="row">';
    foreach($data as $m){
        $content .='<div class="card" style="width: 18rem;">
        <a href="movie_details.php?id='.$m['id'].'"><img src="files/pics/'.$m['image'].'" class="card-img-top" alt="'.$m['movie_name'].'"></a>
        <div class="card-body">
          <h5 class="card-title"><a href="movie_details.php?id='.$m['id'].'">'.$m['movie_name'].'</a></h5>
          <p class="card-text">'.$m['description'].'</p>
        </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">'.$m['cat_name'].'</li>

    </ul>
      </div>';
    }


$content .=    '</div>
<div>';
}else{
    $content .= '<div class="alert alert-danger" role="alert">
    There is no Category with that name  !
  </div>';
}
require_once("template/index.php");

?>