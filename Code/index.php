<?php
    include_once("database.php");
    $sql = "SELECT * FROM projects";
    $resultat = mysqli_query($link,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styletst.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>title</th>
            <th>nature</th>
            <th>URL brief</th>
            <th>rendu</th>
        </thead>

        <tbody>
            
           
                <?php
                foreach ($resultat as $row ) :?>
                    <tr>  
                        <td><?= $row['titre_projet'];?></td>
                        <td><?= $row['nateur de projet'];?></td>
                        <td><?= $row['urlt'];?></td>
                        <td><input type="text" name="rendu"><button>push</button> </td>
                    </tr>
                <?php endforeach ?>
                
            
            
        </tbody>
    
    </table>
    
</body>
</html>