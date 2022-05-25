<?php
    include '../parts/header.php';
    include __DIR__. '/../lib/functions.php';
        ?>
        <title>User Gest</title>
<link rel="stylesheet" href="../headstyle.css">
<link rel="stylesheet" href="../style.css">
<table>
    <tr> <th>ID</th> <th>Nom</th><th>Prénom</th><th>Pseudo</th><th>E-mail</th>
</table>
<?php
    include '../include/sql.php';
    $req = $pdo->query("SELECT * FROM users");
    while($data = $req->fetch()){
        echo "<tr><td>$data->ID</td><td>$data->nom</td><td>$data->prenom</td><td>$data->pseudo</td><td>";
        echo "<td>";
        echo "<a href='./update.php?id=$data->ID";
        echo "<a href='./delete.php?id=$data->ID";
        echo "</td></tr>";    
    } 
?>
