<?php

require_once("db.php");
$title = "Home";
$content ='';
if(!empty($_POST)){
    $cname = trim($_POST['cname']);
    $cage = (int) trim($_POST['cage']);
    $cgender = trim($_POST['cgender']);
    $cmaried = isset($_POST['cmaried'])?:0;
    $cchilds = trim($_POST['cchilds']);
    $cemail = trim($_POST['cemail']);
    $cpass = trim($_POST['cpass']);
    $msg = '';
    if(!(strlen($cname)>2 && strlen($cname)<30)){
        $msg .= 'Name is wrong<br>';
    }
    if(!($cage >10) && ($cage >60)){
        $msg .= 'Age must be > 10 and <60 <br>';
    }
    if(!filter_var($cemail,FILTER_VALIDATE_EMAIL)){
        $msg .= 'Email is wrong <br>';
    }
    if(!(strlen($cpass)>8 && strlen($cpass)<30)){
        $msg .= 'Password must be more than 8 chars<br>';
    }
    if($msg!=''){
        $content .= '<div class="alert alert-danger" role="alert">
            <h3>Error  !</h3>
            '.$msg.'
          </div>';
    }else{
        $name= strtoupper($_POST['cname']);
        $content .= '<div class="alert alert-success text-center" role="alert">
            Welcome '.$name.' Start Download Movie
            <br>
            <button type="submit" class="btn btn-primary">Download</button>
          </div>';
        $name= strtoupper($_POST['cname']);
    }
    

}
$content .='<div class="container"><div class="row"><div class="col">
<h2>Download Movie</h2>
<form method="post" action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'">
<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" class="form-control" id="name" name="cname" aria-describedby="nameHelp">
  <div id="enameHelp" class="form-text">Your Full Name.</div>
</div>

<div class="mb-3">
  <label for="name" class="form-label">Age</label>
  <input type="text" class="form-control" id="name" name="cage" aria-describedby="cage">
  <div id="cage" class="form-text">Your Age.</div>
</div>
<div class="mb-3">
<label for="gender" class="form-label">Gender</label>
<select class="form-select" aria-label="Default select example" name="cgender">
  <option value="1">Male</option>
  <option value="2">Female</option>
</select>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" name="cmaried" value="0" id="maried">
  <label class="form-check-label" for="maried">
    Maried
  </label>
</div>

<div class="mb-3">
  <label for="name" class="form-label">Children</label>
  <input type="number" class="form-control" id="name" name="cchilds" aria-describedby="cchilds">
  <div id="cchilds" class="form-text">Number of Children.</div>
</div>


<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"name="cemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Your email.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="cpass" class="form-control" id="exampleInputPassword1">
  </div>
<button type="submit" class="btn btn-primary">Download</button>
</form>
</div></div></div>';

require_once("template/index.php");

?>