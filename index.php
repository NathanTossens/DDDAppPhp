<!DOCTYPE html>
<!--
Developped by Nathan Tossens 2014
-->
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Login DDD</title> 
        <!--<link rel="stylesheet" href="CSS\normalize.css">-->
	<link rel="stylesheet" href="CSS\loginStyle.css">
    </head>
    <body>
    <center><h1 class="titleLogin">Digital Delegating Democracy</h1></center>
        <section class="loginform cf">
            <form name="login" action="welcomeScreen.php" method="post" accept-charset="utf-8">
                    <ul>
                            <li><label for="usermail">Email</label>
                            <input type="email" name="usermail" placeholder="yourname@email.com" required></li>
                            <li><label for="password">Password</label>
                            <input type="password" name="password" placeholder="password" required></li>
                            <li>
                            <input type="submit" value="Login"></li>
                    </ul>
            </form>
        </section>
    </body>
</html>