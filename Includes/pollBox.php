<link rel="stylesheet" href="CSS\votesStyle.css">
<form action="Includes/submittedPoll.php" method="post">
    <table>
        <tr>
            <td>
                Short description : 
            </td>
            <td>
                Eligibles : 
            </td>
        </tr>
        <tr>
            <td>
                <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
                    $response = $bdd->query('SELECT `description` from `skills` where `skillName` =\'' . $_GET['skill'] . '\'');
                while ($item = $response->fetch()) {
                        ?>
                         <span><?php echo $item['description']?></span>
                                <?php
                            }
                            $response->closeCursor();
                            ?>
               
            </td>
            <td>
                <ul class="ulTextBox">  
                    <?php
                    $bdd = new PDO('mysql:host=localhost;dbname=DDD', 'root', '');
                    $response = $bdd->query('SELECT `idElector`,`idSkills`,`name`,`firstName` FROM `electorskills`INNER JOIN `electors` on `idElector` = `numElector` INNER JOIN `skills` on `idSkills`= `numSkill` where `skillName` =\'' . $_GET['skill'] . '\'');
                    $cpt = 0;
                    while ($item = $response->fetch()) {
                        $cpt++;
                        $value = $item['idElector'] . " " . $item['idSkills'];
                        $fullName = $item['name'] . " " . $item['firstName'];
                        ?>
                        <li class="liTextBox"><label class="labelTextBox"><input type="checkbox" name="skillBox[]" id="skillsBox" value= "<?php echo htmlspecialchars($value) ?>" ><?php echo $fullName ?></label></li>
                                <?php
                            }
                            $response->closeCursor();
                            ?>
                </ul>
                <input type="submit" value="Submit poll" name="submit" >
            </td>
        </tr>
    </table>
</form>

