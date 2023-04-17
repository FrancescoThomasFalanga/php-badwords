<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body style="text-align:center">
    
    <h1>Risultato iniziale</h1>

    <p>
        <strong>Il paragrafo da te scritto è:</strong>

        <?php 
        
        echo $_GET["paragraph"];

        ?>
    </p>

    <p>

        Il paragrafo ha:

        <strong>
            <?php 
            
            echo str_word_count($_GET["paragraph"]);

            ?>
        </strong>

        parole e

        <strong>
            <?php 
            
            echo strlen($_GET["paragraph"]);

            ?>
        </strong>
        
        caratteri.


    </p>

    <hr>

    <h1>Risultato dopo la Censura della parola data</h1>

    <p>
        <strong>Il nuovo paragrafo è:</strong>

        <?php 

        $newParagraph = str_replace($_GET["censure"], "***", $_GET["paragraph"]);
        
        if($_GET["censure"] == null || $_GET["censure"] == "") {

            echo "Uguale a quello di sopra, non c'è censura poichè avrai dimenticato la parola da inserire.";
            
        } else {
            echo $newParagraph;
        };
        
        ?>
    </p>

    <p>
        
        Il nuovo paragrafo ha:

        <strong>
            <?php 
            
            if($_GET["censure"] == null || $_GET["censure"] == "") {

                echo "/";
                
            } else {
                echo str_word_count($newParagraph);
            };

            ?>
        </strong>

        parole e

        <strong>
            <?php

            if($_GET["censure"] == null || $_GET["censure"] == "") {

                echo "/";

            } else {
                echo strlen($newParagraph);
            };

            ?>
        </strong>
        
        caratteri.

        
    </p>

</body>
</html>