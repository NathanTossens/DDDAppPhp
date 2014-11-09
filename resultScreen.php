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
        <script src="Ressources/JSConfig/doghnutConfig.js"></script>
        <?php include("Includes/banner.php"); ?>
        <?php include("Includes/menu.php"); ?>
        <style>
            div canvas {
                width:50;
                height:50;
            }
        </style>
    </head>
    <body>
           <div id="canvas-holder">
            <canvas id="chart-area"/>
        </div>

        <?php
        $cpt=0;
        $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
        $response = $bdd->query('SELECT `skillName`, COUNT( * ) `cpt` FROM `skills` join `poll`on `idSkills`= `numSkills` GROUP BY `numSkills`');
        while ($item = $response->fetch()) {
            $skillName[$cpt] = $item['skillName'];
            $count[$cpt]= $item['cpt'];
            $cpt++;
        }
        $response->closeCursor();
        ?>
     


        <script>
            var cpt = <?php echo $cpt ?>;
            alert(cpt);
            var doughnutData = [
                {
                    value: <?php echo $count[0]; ?>,
                    color: "#F7464A",
                    highlight: "#FF5A5E",
                    label: "<?php echo $skillName[0]; ?>"
                },
                {
                    value: <?php echo $count[1]; ?>,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label:  "<?php echo $skillName[1]; ?>"
                }
            ];
            window.onload = function(){
                 var ctx = document.getElementById("chart-area").getContext("2d");
                 var mydoughnutChart = new Chart(ctx).Doughnut(doughnutData);
            };
        </script>
    </body>
</html>
