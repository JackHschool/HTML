<?php
require_once "Social_controller";
?> 
<!DOCTYPE html>
<html lang="en">

<html>
<head>
<title><?php echo $title?></title>
<img src="images/<?php echo $image; ?>" width="400">
<p align="center"></p>
<h2><a href=<?php echo $gitlink?>> <?php echo $gitlink ?></a></h1>



<h2><a href= <?php echo $tocourses?>><?php  echo $to_courses_Title?></a></h2>
<p align="center"></p>
<h3><a href=<?php echo $homepage ?> ><?php echo $to_Homepage_title?></a></h3>
<h5 align="center"><a href="mailto:<?php echo $email; ?>"> Jack email</a></h5>


</head>
</html>