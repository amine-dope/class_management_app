<?php 


include_once ("../connexion_db.php");

if (isset($_POST["submit"])) {
    $title = $_POST["titre_project"];
    $nature = $_POST["nature_de_project"];
    $descreption = $_POST["descreption"];
    $query = "INSERT INTO `projects`(`titre_projet`, `nateur_de_projet`, `descreption`) VALUES('".$title."','".$nature."','".$descreption."')";
    $results = mysqli_query($link, $query);
    if ($results) {
        header("location:formateur");
        die();
    }    else {
        echo "<h1>there an error in the database, Please try again .</h1>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./prof_style.css">
    <title>Add Project</title>
</head>
<body>
    <h1 style="text-align:center;">Add Project</h1>
    <form class="form" action="" method="POST">
        <label for="titre_project">Titre de project</label>
        <input type="text" name="titre_project" id="titre_project" placeholder="Enter project title" >
        <label for="nature_de_project">Nature de project</label>
        <input type="text" name="nature_de_project" id="nature_de_project" placeholder="Enter the nature of the project" >
        <label for="descreption">Descreption</label>
        <textarea name="descreption" id="descreption" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Add Project">
    </form>
</body>
</html>