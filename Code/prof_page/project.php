<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <h1 style="text-align:center;">Project</h1>

<?php 

    include_once ("../connexion_db.php");
    $projectId = $_GET["id"];
    $action = $_GET["action"];

    if ($action == "show") {
        $sql = "SELECT * FROM `projects` WHERE id_projet=".$projectId."";
        $resultProject = mysqli_query($link, $sql);
    
        $countProject = mysqli_num_rows($resultProject);
    
    
    if($countProject == 0)
    {
        echo '<h1 style="text-align:center;">Thers is nothing to show.</h1>';
    }
    
    else{
        $row = mysqli_fetch_assoc($resultProject);
    
        $title = $row["titre_projet"];
        $nature = $row["nateur_de_projet"];
        $descreption = $row["descreption"];
    
        echo' <div class="container">
        <h2>Project Title: '.$title.'</h2>
        <h2>Project Nature: '.$nature.'</h2>
        <h2>Descreption: '.$descreption.'</h2>
        
    </div>';
    
    
        }
    }
    elseif($_GET["action"] == "delete"){
        $sql = "DELETE FROM `projects` WHERE id_projet=".$projectId."";
        $resultProject = mysqli_query($link, $sql);
        header("location:formateur.php");
        die();
    }


   


?>


  
</body>
</html>