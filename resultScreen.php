<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
        <script src="Ressources/Librairies/Chart.js"></script>    
        <script src="Ressources/Librairies/jquery-ui/external/jquery/jquery.js"></script>
        <script src="Ressources/Librairies/jquery-ui/jquery-ui.js"></script>     
        <?php include("Includes/banner.php"); ?>
        <?php include("Includes/menu.php"); ?>
        <style>
            body{
                background-image: url(Ressources/Images/generalBackground.jpg);
            }
            div canvas {
                width:50;
                height:50;
            }
        </style>
    </head>
    <body>
        <div id="canvas-holder">
            <h1>Skills distribution :</h1>
            <canvas id="skills-area"/>
        </div>
        

        <?php
        $cpt = 0;
        $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
        $response = $bdd->query('SELECT `skillName`, COUNT( * ) `cpt` FROM `skills` join `poll`on `idSkills`= `numSkills` GROUP BY `numSkills`');
        while ($item = $response->fetch()) {
            $skillName[$cpt] = $item['skillName'];
            $count[$cpt] = $item['cpt'];
            $cpt++;
        }
        $response->closeCursor();
        ?>
        <script>
           
            var cpt = <?php echo $cpt ?>;
            var skillNameJS = <?php echo json_encode($skillName); ?>;
            var countJS = <?php echo json_encode($count); ?>;
            window.onload = function () {
                var ctx = document.getElementById("skills-area").getContext("2d");
                var mydoughnutChart = new Chart(ctx).Doughnut();
                for (var i = 0; i < cpt; i++) {
                    mydoughnutChart.addData({
                        value: parseInt(countJS[i]),
                        color: '#' + Math.random().toString(16).substr(-6),
                        highlight: '#' + Math.random().toString(16).substr(-6),
                        label: skillNameJS[i]
                    });
                }
            };
        </script>
    </body>
</html>
