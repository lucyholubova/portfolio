<?php
$db = new PDO('mysql:host=192.168.20.20;dbname=Project_2', 'root', '');
$db-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$sql = ' SELECT `name`, `url` FROM `portfolio`;';
$query = $db->query($sql);
$result = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="panel.css">
<body>

<h1> Admin page </h1>

<body>
<?php
echo '
<div class="addNewProject"> <a href="panel.html"> add new project</a></div>';
?>
</body>

<table>
    <thead>
        <tr>
            <th> Projects </th>
            <th> URL </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as $project){
        echo '<tr><td>' . $project['name'] . '</td>';
        echo '<td>' . $project['url'] . '</td>';
        echo '<td> <input class="edit" type="submit" value="  edit "</td>';
        echo '<td> <input class="delete" type="submit" value="delete"</td>';

    }

    ?>
    </tbody>


</table>


</head>
</body>
