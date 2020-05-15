<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio PHP</title>
</head>
<body>
    <?php
    /**
     * Descrizione:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo
Visualizzare a schermo la relativa lunghezza del paragrafo
Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi).
Nome della repo per consegnare l’esercizio: php-badwords
Link utili:
MAMP dowload: https://www.mamp.info/en/downloads/
Funzioni per le stringhe: http://php.net/manual/en/ref.strings.php
Buon lavoro
     */
    // ref
    // variabile contentente un valore di tipo stringa
    $paragraf = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore nostrum adipisci quasi sunt placeat nulla aspernatur quisquam. Nam minus saepe inventore animi. Harum beatae cum, reprehenderit ducimus optio porro error.';
    // variabile contenente una stringa concatenta con un metodo che fornisce il n° di caratteri
    $legnth = "Il numero di caratteri presenti sono: " . strlen($paragraf);
    ?>

    <p><?php echo $paragraf; ?></p>
    <p><?php echo $legnth; ?></p>
</body>
</html>