<?php
    include_once("database.php");
    $sql = "SELECT * FROM projects";
    $resultat = mysqli_query($link,$sql);

    // $sqli = "INSERT INTO `validation`";
    // $sqli .= "VALUE";

    
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="student_style.css">
    <title>class management app</title>
</head>
<body method="POST" action="">
    <header class="container">
        <div class="logo"><h1 class="you">You</h1>
        <h1 class="code">Code</h1></div>
        
            <ul class="navitems2">
                <li  class=profil>
                    <img src="person-male.png" alt="#">
                    <a href="#">Profil</a></li>                                           
                <li class="logout" >
                    <form action="logout.php"method="POST">
                        <input type="submit" class="logout"  name="LOGOUT" value="logout">
                    </form>
                </li>                                           
            </ul>
       
    </header>


    <table>
        <thead>
            <th>title</th>
            <th>nature</th>
            <th><a>URL brief</a></th>
            <th>rendu</th>
            <th>valide</th>
        </thead>

        <tbody>
            
           
                <?php
                foreach ($resultat as $row ) :?>
                    <tr>  
                        <td><?= $row['titre_projet'];?></td>
                        <td><?= $row['nateur de projet'];?></td>
                        <td><?= $row['urlt'];?></td>
                        <td>
                            <form action="traitement.php" method="POST">
                                <input type="text" name="rendu">
                                <button name="push" type="submit">push</button>
                            </form>
                         </td>
                    </tr>
                <?php endforeach ?>
                
            
            
        </tbody>
    
    </table>
    
</body>
</html>