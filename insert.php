<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
</head>
<body>
    <form action="save_task_to_db.php" method="post">
        <p><label for="name">Add task name</label></p>
        <p><input type="text" name = "task_name" placeholder = "enter your task here!"></p>
        <input type="submit" value="Add to the list">
    </form>
<br>
    <table>
        <tr>
        <td>ID</td>
        <td>Task_name</td>
        <td>Status</td>        
        </tr>

        <!-- php mathi select krvnu k su display krvu che -->
        <?php
        $id = 1;
        include_once('db.php');             
        $selectQuery = "SELECT * FROM `todo`";

        // output avse e $result name na varialbe ma save thase!
        $result = mysqli_query($mysqli,$selectQuery);

        // jys udhi rows hoi table ma tya  sudhi loop chlase
        while ($row = mysqli_fetch_array($result)){
            echo '<tr>';

            echo '<td>'.$id++.'</td>';
            echo '<td>'.$row['task_name'].'</td>';
            echo '<td>'.$row['status'].'</td>';
        }
        ?>
    </table>
</body>


</html>