<?php
    $newString = $_GET['stupidString'];
    $changeWord = $_GET['whatChange'];
    $substituteWord = '***';
    $transformedString = str_ireplace("$changeWord", "$substituteWord", "$newString")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riceve from PHP</title>
</head>
<body>
    <div>
        <h1>
            La Nuova Stringa è:
            <span style="color: red;">
                <?php
                    echo $newString
                ?>
            </span>
            <h2> 
                <div>Lunghezza con spazi: <span><?php echo strlen($newString) ?></span></div>
                <div>Lunghezza senza spazi: <span style="color: lightblue;"><?php echo strlen(str_ireplace(" ", "", "$newString")) ?></span></div>
            </h2>
        </h1>
        <h1>
            la parola da sostituire é:
            <span style="color: green;">
                <?php 
                    echo $changeWord
                ?>
            </span>
        </h1>
    </div>
    <div>
        <h1>
            La Nuova frase con la parola "<?php echo $changeWord ?>" sostituita con "<?php echo $substituteWord ?>": 
            <span style="color: blue;"><?php echo $transformedString ?></span>
        </h1>
        <h2> 
            <div>Lunghezza con spazi: <span><?php echo strlen($transformedString) ?></span></div>
            <div>Lunghezza senza spazi: <span style="color: lightblue;"><?php echo strlen(str_ireplace(" ", "", "$transformedString")) ?></span></div>
        </h2>

    </div>
</body>
</html>