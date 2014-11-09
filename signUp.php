<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS\loginStyle.css">
        <title>Sing up</title>
        <style>
            body{
                background-image: url(Ressources/Images/generalBackground.jpg);
            }
        </style>

    </head>
    <body>
        <?php
        // put your code here
        ?>

        <section class="loginform cf">
            <form name="login" action="welcomeScreen.php" method="post" accept-charset="utf-8">
                <ul>
                    <li><label for="usermail">Email</label>
                        <input type="email" name="usermail" placeholder="yourname@email.com" required></li>
                    <li><label for="password">Password</label>
                        <input type="password" name="password" placeholder="password" required></li>
                    <li>
                    <li><label for="password">Password</label>
                        <input type="password" name="password" placeholder="password" required></li>
                    <li>
                        <input type="submit" value="Sign up">
                    </li> 
                </ul>
            </form>
        </section>
    </body>
</html>
