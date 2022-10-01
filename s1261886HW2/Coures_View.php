<?php require_once "courses_controller";

?>
<!DOCTYPE html>
<html lang="en">
    <html>
        <title><?php echo  $title?></title>
        <head>
            <h1><?php echo $Welcome ?></h1>
           <body>
           <table border="1" align="center" width="60%">
            <tr>
                <th>Course Name</th>
                <th>Instructor</th>

            </tr>
            <?php
            $row=0;
            foreach($courses as $course){
                $Instructor = $course["Instructor name "];
                $classname = $course["Class name"];
                if($row % 2==0){
                    $bgcolor="#fffffff";
                }
                else {
                    $bgcolor="#aaaaaaa";
                }
                $row++;
                echo "<tr bgColor=\"$bgcolor\"><td>$Instructor</td><td>$classname</td><td></td>";
                echo "</tr>";

            }
            ?>
           </body>
        </head>
    </html>