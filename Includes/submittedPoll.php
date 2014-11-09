<?php

if (isset($_POST['skillBox'])) {
    $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
    $polls = $_POST['skillBox'];
    foreach ($polls as $skill) {
        $electorSkill = explode(" ", $skill);
        $val1 = intval($electorSkill[0]);
        $val2 = intval($electorSkill[1]);
        $bdd->exec('INSERT INTO `poll`(`numElector`, `numSkills`) VALUES(' . $val1 . ',' . $val2 . ')');
        $val1 = null;
        $val2 = null;


//echo $ skill."<br />";}hdfcdfdfhddjh
        echo "Your poll has been submitted successfully";
    }
}
?>