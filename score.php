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
            <center><div style="border: 10px double black; border-radius: 20px; width: 30%;">
                <div style="background-color:  #269abc; color:  #fff;"><h3>Your Score</h3></div>
                <div style="background-color: white; color: green;"><h2>Congratulation</h2></div>
                <div style="background-color:  black; color: gold;"><h1><?php echo $_SESSION['score']; ?></h1></div>
                </div><br><br><br>
                <button type="button" value="Play Again!" name="playagain" class="btn btn-success"><a href="list.php"
                    style="color: white; font-size: 20px;">Play Again!</a></button><br><br>
            </center>
        </div>
        
    </body>
</html>
