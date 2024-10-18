<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invio.php</title>
</head>
<style>
</style>
<body>
    <?php
    $mittente = $_POST["mailSource"];
    $destinatario = $_POST["mailDest"];
    $oggetto = $_POST["objectMail"];
    $corpo = $_POST["textMail"];
    echo "<h1>Mail creata</h1>";
    createDiv1($mittente, $destinatario, $oggetto);
    createDiv2($corpo);
    echo "<hr>";
    createDiv3(strlen($corpo), str_word_count($corpo));

    function createDiv1($ms, $md, $o){
        echo "<h3>Informazioni</h3>";
        echo "<div style='background-color: lightblue;'>";
        echo "<p>L'indirizzo mail del mittente: $ms</p>";
        echo "<p>L'indirizzo mail del destinatario: $md</p>";
        echo "<p>L'oggetto della mail: $o </p>";
        echo "</div>";
    }

    function createDiv2($c){
        echo "<h3>Corpo della mail</h3>";
        echo "<div style='background-color: orange; width: 50%;'>";
        echo "<p>Corpo della mail: $c </p>";
        echo "</div>";
    }

    function createDiv3($nChar, $nWord){
        echo "<h3>Corpo della mail</h3>";
        echo "<div style='background-color: gray;'>";
        echo "<p>Lunghezza del corpo della mail(numero di caratteri): $nChar</p>";
        echo "<p>Numero di parole contenute nel corpo della mail: $nWord</p>";
        echo "</div>";
    }   

    ?>
</body>
</html>