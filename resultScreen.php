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
        <link rel="stylesheet" href="CSS\verticalMenuStyle.css">
        <script src="Ressources/Librairies/Chart.js"></script>    
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
         <div class="wrapper" style="float:left">
            <nav class="vertical">
                <ul>
                    <li>
                        <a href="#">Skills</a>
                        <div>
                            <ul>
                                <li><a href="resultScreen.php?skill=Justice">Justice</a></li>
                                <li><a href="resultScreen.php?skill=Legislation">Legislation</a></li>
                                <li><a href="resultScreen.php?skill=Foreign Affairs">Foreign Affair</a></li>
                                <li><a href="resultScreen.php?skill=true">Compétences4</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="canvas-holder">
            <h1>Skills distribution :</h1>
            <canvas id="skills-area"/>
        </div>
        
         <center>
        <div>
            <?php
            if (isset($_GET['skill'])) {
                getResults();
            }

            function getResults() {
                include("Includes/resultsCharts.php");
            }
            ?>
        </div>
    </center>
    
        

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
        </script>
    </body>
</html>
