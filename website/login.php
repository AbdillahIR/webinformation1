<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign Up</title>
    <link rel="stylesheet" href="css/signUp.css">
    <style>
        .form{
            width: 230px;
            height: 280px;
        }
    </style>
</head>
<body>
    <?php 
    require('connection.php');
    if (isset($_POST['login_button'])) {
        $_SESSION['validate']=false;
        $email=$_POST['email'];
        $password=$_POST['password'];
        $p=crud::conect()->prepare('SELECT * FROM crudtable WHERE email=:e and pass=:p');
        $p->bindValue(':e', $email);
        $p->bindValue(':p', $password);
        $p->execute();
        $d=$p->fetchAll(PDO::FETCH_ASSOC);
        if ($p->rowCount()>0) {
            $_SESSION['email']=$email;
            $_SESSION['pass']=$password;
            $_SESSION['validate']=true;
            header('location: index.php');
        }else {
            echo 'Make Sure that you are registere!';
        }
    }
    ?>
    <div class="form">
        <div class="title">
            <p>Login Form</p>
        </div>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login_button">
        </form>
    </div>
</body>
</html>