<!DOCTYPE html>
<html>
<head>
    <title>
   animals
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/foundation.css">
</head>
<body>
<h1>Welcome to my Animal app</h1>
<div>

    <div class="grid-x grid-margin-x">
        <div class="large-1 cell"></div>
        <?php
        include 'animal.php';
        echo "
 <div class=\"auto cell\" >
            <img src=\"images/img1.jpg\" alt=\"\">
       ".$kangaroo1."
        </div>
         <div class=\"auto cell\" ><img src=\"images/img2.jpg\" alt=\"\">
        A cow ".$cows." so as to get attention from the farmer
        </div>
        <div class=\"auto cell\" ><img src=\"images/img3.jpg\" alt=\"\">
        this dog is ".$dog." in color.
        </div>
    
    </div>
";
        ?>



</div>

</body>
</html>
