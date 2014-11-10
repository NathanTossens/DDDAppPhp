<script src="Ressources/Librairies/Chart.js"></script>   
<div id="canvas-holder2">
    <h2><?php echo $_GET['skill'] ?> poll distribution :</h2>
    <canvas id="skills-area2"/>
</div>


<?php
$cpt = 0;
echo $_GET['skill'];
$bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
$response = $bdd->query('Select `name`,`firstName`, COUNT(*) `cpt` from `poll` join `electors` on `numElector`= `idELector` join `skills` on `numSKills`=`idSkills` where `skillName`=\'' . $_GET['skill'] . '\'group by (`numElector`)');
while ($item = $response->fetch()) {
    $name[$cpt] = $item['name'];
    $firstName[$cpt] = $item['firstName'];
    $count[$cpt] = $item['cpt'];
    $cpt++;
}
$response->closeCursor();
?>
<script>

    var cpt = <?php echo $cpt ?>;
    var nameJS = <?php echo json_encode($name); ?>;
    var firstNameJS = <?php echo json_encode($firstName); ?>;
    var countJS = <?php echo json_encode($count); ?>;
        var ctx = document.getElementById("skills-area2").getContext("2d");
        var mydoughnutChart = new Chart(ctx).Doughnut();
        for (var i = 0; i < cpt; i++) {
            mydoughnutChart.addData({
                value: parseInt(countJS[i]),
                color: '#' + Math.random().toString(16).substr(-6),
                highlight: '#' + Math.random().toString(16).substr(-6),
                label: firstNameJS[i]+ " "+nameJS[i]
            });
        }
</script>