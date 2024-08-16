<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <style>
        #gambar1{
            width: 30px;
            height: 30px;
        }
    </style>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        require('connection.php');
            $p=crud::Selectdata();
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $e=crud::delete($id);
            }
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $e=crud::delete($id);
            }
            if (count( $p)>0) {
                for ($i=0; $i < count( $p); $i++) {
                    echo '<tr>';
                    foreach ( $p[$i] as $key => $value) {
                     if ($key!='id') {
                        echo '<td>'.$value.'</td>';
                    }
                    }
                    ?>
                    
                    <td><a href="users.php?id=<?php echo $p[$i]['id'] ?>"><img id="gambar1" src="img/crud/trash.jpg" alt="" srcset=""></a></td>
                    <td><a href="upDate.php?id=<?php echo $p[$i]['id'] ?>"><img id="gambar1" src="img/crud/edit.png" alt="" srcset=""></a></td>
                    <?php
                    echo '</tr>';
                }
            }
        ?>
        </tbody>
    </table>
</body>
</html>