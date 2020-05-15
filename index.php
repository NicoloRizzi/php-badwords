<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio PHP</title>
</head>
<body>
    <?php
    // ref
    // variabile contenente un valore di tipo stringa
    $paragraf = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore nostrum adipisci quasi sunt placeat nulla aspernatur quisquam. Nam minus saepe inventore animi. Harum beatae cum, reprehenderit ducimus optio porro error.';
    // variabile contenente n° di caratteri
    $legnth =  strlen($paragraf);
    // variabile contente il parametro passato dal client
    $bad_word = $_GET['name'];
    // variabile contenente la struttura modificata dal metodo str_replace
    $replace = str_replace($bad_word ,'***', $paragraf);
    ?>

    <p><strong>Testo originale: </strong><?php echo $paragraf ?></p>
    <p><?php echo "Il numero di caratteri presenti sono: " . $legnth ?></p>
    <p><strong>Testo modificato: </strong><?php echo $replace ?></p>
</body>
</html>