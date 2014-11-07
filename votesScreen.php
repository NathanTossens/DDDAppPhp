<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include("Includes/menu.php"); ?>
        <link rel="stylesheet" href="CSS\welcomeStyle.css">
        <link rel="stylesheet" href="CSS\votesStyle.css">
        <link rel="stylesheet" href="CSS\verticalMenuStyle.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br></br>
        <br></br>
        <br></br>
        
   
        <div class="wrapper" style="float:left">
            <nav class="vertical">
                <ul>
                    <li>
                        <a href="#">Skills</a>
                        <div>
                            <ul>
                                <li><a href="votesScreen.php?skill=Justice">Justice</a></li>
                                <li><a href="votesScreen.php?skill=Legislation">Legislation</a></li>
                                <li><a href="votesScreen.php?skill=ForeignAffairs">Foreign Affair</a></li>
                                <li><a href="votesScreen.php?skill=true">Compétences4</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    <center>
        <div>
             <?php
        if (isset($_GET['skill'])) {
            getPollBox();
        }

        function getPollBox() {
            include("Includes/pollBox.php");
        }
        ?>
        <!--  
          <ul class="ulTextBox">
              <li class="liTextBox"><label class="labelTextBox" for="chk1"><input type="checkbox" name="chk1" id="chk1">First</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk2"><input type="checkbox" name="chk2" id="chk2">Second</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk3"><input type="checkbox" name="chk3" id="chk3">Third</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk4"><input type="checkbox" name="chk4" id="chk4">Fourth</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk5"><input type="checkbox" name="chk5" id="chk5">Fifth</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk6"><input type="checkbox" name="chk6" id="chk6">Sixth</label></li>
              <li class="liTextBox"><label class="labelTextBox" for="chk7"><input type="checkbox" name="chk7" id="chk7">Seventh</label></li>
          </ul>-->
        
        </div>
    </center>
    </body>
</html>
