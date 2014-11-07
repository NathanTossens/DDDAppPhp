<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS\welcomeStyle.css">
        <title>Welcome</title>
    </head>
    <body >
        <div></div>
        <?php
        if (isset($_POST['usermail']) && isset($_POST['password'])) {
            $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
            $response = $bdd->query('SELECT password FROM electors WHERE pseudo =\'' . $_POST['usermail'] . '\'');
                while ($item  = $response->fetch()){
                 if ($item['password'] === $_POST['password']) {
                        include("Includes/loggedScreen.php");
                    } else {
                        include("Includes/badLogPwd.php");
                    }
                }
            $response->closeCursor();
            }
        ?>
    </body>
</html>
