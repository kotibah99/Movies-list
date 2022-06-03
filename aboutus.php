<?php

require_once("db.php");
$title = "About Us";
$content ='<div id="about">
<h2>About Us</h2>
<div class="desc">
    Welcome to Movie List website, You can download movies and see movies details in many categories.
</div>
</div>
<div class="movies-links">
    <h3>Best Movies Website</h3>
    <ul class ="movie">
        <li><a href="#">Movie A</a></li>
        <li><a href="#">Movie B</a></li>
        <li><a href="#">Movie C</a></li>
        <li><a href="#">Movie D</a></li>
        <li><a href="#">Movie E</a></li>
    </ul>
</div>';

require_once("template/index.php");

?>