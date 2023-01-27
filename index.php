<?php 
    $string = 'inserisci un frase stupida';
    $change = 'inserisci una parola da sostituire'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova PHP</title>
</head>
<body>
    <form action="ciuppo.php" method="GET">
        <textarea name="stupidString" id="stupidString" placeholder="<?php echo $string ?>"></textarea>
        <input type="text" name="whatChange" id="wahtChange" placeholder="<?php echo $change ?>">
        <button type="submit">Invia</button>
    </form>
</body>
</html>