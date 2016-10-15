<!DOCTYPE html>
<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="bootstrap-3.3.6-dist\css\bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap-3.3.6-dist\js\bootstrap.min.js"></script>
        <link href="custom.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1 style="text-align: center; color: #eee; font-family: Harrington;">Jumble</h1>
            </div>
            <DIV class="well" style="background-color:  #999;">
                <h2 id="cityhead">Mixing color</h2>
            </DIV>
            <center> <div class="row">
                <table class="table table-hover" style="width:60%;">
    <thead>
      <tr>
        <th>Jumbled Word</th>
        <th>Answer</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php $str1 = 'BLUE'; $strshuff1 = str_shuffle($str1); echo $strshuff1;?></td>
        <td><form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
            <input type="text" name="in1" style="text-transform: uppercase; background-color:  #c7254e; color:  #eee;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str2 = 'RED'; $strshuff2 = str_shuffle($str2); echo $strshuff2;?></td>
        <td><input type="text" name="in2" style="text-transform: uppercase; background-color:  #3e8f3e; color:  #b9def0;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str3 = 'ORANGE'; $strshuff3 = str_shuffle($str3); echo $strshuff3;?></td>
        <td><input type="text" name="in3" style="text-transform: uppercase; background-color:  #eb9316; color:  #f5f5f5;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str4 = 'INDIGO'; $strshuff4 = str_shuffle($str4); echo $strshuff4;?></td>
        <td><input type="text" name="in4" style="text-transform: uppercase; background-color:  #e7c3c3; color:  #000;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str5 = 'MAROON'; $strshuff5 = str_shuffle($str5); echo $strshuff5;?></td>
        <td><input type="text" name="in5" style="text-transform: uppercase; background-color:  #f7e1b5; color:  #245580;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str6 = 'GREEN'; $strshuff6 = str_shuffle($str6); echo $strshuff6;?></td>
        <td><input type="text" name="in6" style="text-transform: uppercase; background-color:  hotpink; color: #1b6d85;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str7 = 'PINK'; $strshuff7 = str_shuffle($str7); echo $strshuff7;?></td>
        <td><input type="text" name="in7" style="text-transform: uppercase; background-color:  coral; color:  blueviolet;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str8 = 'YELLOW'; $strshuff8 = str_shuffle($str8); echo $strshuff8;?></td>
        <td><input type="text" name="in8" style="text-transform: uppercase; background-color:  #444; color:  #f5f5f5;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str9 = 'MAGENTA'; $strshuff9 = str_shuffle($str9); echo $strshuff9;?></td>
        <td><input type="text" name="in9" style="text-transform: uppercase; background-color: #ff0; color:  #255625;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
      <tr>
        <td><?php $str10 = 'BROWN'; $strshuff10 = str_shuffle($str10); echo $strshuff10;?></td>
        <td><input type="text" name="in10" style="text-transform: uppercase; background-color:  olive; color:  aquamarine;
                   border: 2px solid black; border-radius: 5px;"/></td>
      </tr>
    </tbody>
                    </table>
                </div></center>
            <div class="jumbotron">
                <center>
                    <input type="submit" value="Score" name="submit"/></form>
                </center>
            </div>
           
        </div>
        
        <?php
        $score=0;
 if (!empty($_POST)){
              $in1 = $in2 = $in3 = $in4 = $in5 = $in6 = $in7 = $in8 = $in9 = $in10 = "";
              $in1 = $_POST["in1"]; 
              $in2 = $_POST["in2"]; 
              $in3 = $_POST["in3"]; 
              $in4 = $_POST["in4"];
              $in5 = $_POST["in5"]; 
              $in6 = $_POST["in6"]; 
              $in7 = $_POST["in7"]; 
              $in8 = $_POST["in8"];
              $in9 = $_POST["in9"]; 
              $in10 = $_POST["in10"];
              if (strcasecmp("BLUE",$in1) == 0){
                  $score = $score+1;
              }
              if (strcasecmp("RED",$in2) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("ORANGE",$in3) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("INDIGO",$in4) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("MAROON",$in5) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("GREEN",$in6) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("PINK",$in7) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("YELLOW",$in8) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("MAGENTA",$in9) == 0) {
                  $score = $score+1;
              }
              if (strcasecmp("BROWN",$in10) == 0) {
                  $score = $score+1;
              }
              $_SESSION['score'] = $score;
              header('location:score.php');
              }
        ?>
        
    </body>
</html>
