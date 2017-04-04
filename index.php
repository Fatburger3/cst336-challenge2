<?php
if(!isset$_SESSION['randomNumbers']){
    $_SESSION['randomNumbers'] = array();
    $_SESSION['randomNumbers'][] = rand(1,10);
    $_SESSION['randomNumbers'][] = rand(1,10);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Guess the Numbers</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <blockquote>
        <h1> Guess the Numbers </h1>
        <h3> Guess two numbers between 1 and 10!</h3>
        <form>
            
            Number 1: <input type="text" name="guessnumber1"/>
            <br />
            Number 2: <input type="text" name="guessnumber2" />
            <br /><br />
            <input type="submit" value="Guess Numbers" name="guessForm"/>
            <br /><br />
             <input type="submit" value="Give Up" name="giveUp"/>
             <input type="submit" value="Reset" name="reset"/>
            
        </form>
                </blockquote>
    </body>
</html>