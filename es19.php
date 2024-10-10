<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio19</title>
</head>
<body>
    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $quiz = "<p style='font-style:italic;font-weight:bold;'>$domanda</p>";
        $risposte = array("Venere", "Terra", "Marte", "Mercurio","Giove");
        for ($i = 0;$i<count($risposte);$i++) {
            $quiz = $quiz . "<input type='radio' name='risposta' value=".$risposte[$i].">" . "<label>".$risposte[$i]."</label><br>";
        }
        echo $quiz;
    ?>  
</body>
</html>