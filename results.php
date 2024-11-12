<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es 32</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    
    <h1 class="w-100 p-2 bg-primary text-white text-center">  RISULTATI RECENSIONI  </h1>

    <?php
        if(!isset($_SESSION["sent_rev"])) {
            echo "<p> Nessuna recensione presente ancora </p> <br> <a href='index.html'> Torna alla Homepage </a>";
            exit();
        }
    ?>

    <?php
        function getAverageVote() :float {
            $sum = 0;
            foreach($_SESSION["all_votes"] as $vote) {
                $sum += $vote;
            }
            return floatval($sum / count($_SESSION["all_votes"]));
        }
        $average = number_format(getAverageVote(), 2);
    ?>
    
    <div id="result_container" class="w-50 mx-auto p-3 bg-body-secondary rounded-4 shadow-lg">
        <table class="table">
            <tr>
                <th>Numero di recensioni inviate</th>
                <th>Data dell'ultima recensione</th>
            </tr>
            <tr>
                <td><?php echo count($_SESSION["all_votes"])?></td>
                <td><?php echo $_SESSION["last_date"]?></td>
        </table>
    </div>

    <h3 class="text-center bg-warning w-25 mx-auto"> Media recensioni : <?php echo $average ?>/5 </h3>

    <div class="w-50 mx-auto text-center my-3">
        <a href="index.html" target="_self" class="link-info fs-3">Torna alla Homepage</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>