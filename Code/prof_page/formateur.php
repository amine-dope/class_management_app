<?php

include_once ("../connexion_db.php");

//selectionner les message dans la base de donnée
$query = " SELECT * FROM `formateur` ";
$results = mysqli_query($link, $query);
$formateur = mysqli_fetch_assoc($results);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./prof_style.css">
    <title>class management app</title>
</head>
<body>
    <header class="container">
        <div class="logo"><h1 class="you">You</h1>
        <h1 class="code">Code</h1></div>
        <ol class="navitems">
            <li><a href="#">Briefs</a></li>
            <li><a href="#">Validation</a></li>
        </ol>
        
            <ul class="navitems2">
                <li  class=profil>
                    <img src="person-male.png" alt="#">
                    
                    <details>
                        <summary>Profil</summary>
                        <p>name</p>
                    </details>
                </li>                                           
                <li class="logout">
                    <a href="#">Logout</a>
                </li>                                           
            </ul>
       
    </header>

    <div class="add-btn"><a href="addProject.php" class="btn btn-add">Add Project</a></div>

<?php

$sql = "SELECT * FROM `projects`";
$resultProject = mysqli_query($link, $sql);
$countProject = mysqli_num_rows($resultProject);


if($countProject == 0)
{
    echo '<h1 style="text-align:center;">Thers is nothing to show.</h1>';
}else{
    while ($row = mysqli_fetch_assoc($resultProject)) {

     
    echo' <div class="container">
     <div class="card">
         <div class="image">
             <img src="code-editoren-t.jpg" alt="">
         </div>
         <h3>'.$row["titre_projet"].'</h3>
         <hr>
         <p>'.$row["descreption"].'</p>
         <hr>
         <div class="links">
             <div class="link1"><a href="project.php?action=show&id='.$row["id_projet"].'">card link</a></div>
             <div class="link2"><a href="project.php?action=delete&id='.$row["id_projet"].'">cancel</a></div>
         </div>
     </div>
     
 </div>';
   }
}

?>
   
           
                

</body>
</html>
