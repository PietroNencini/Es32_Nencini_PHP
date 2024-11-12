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
    
    <h1 class="w-100 p-2 bg-success text-white text-center">  RECENSIONE INVIATA </h1>
    <?php
        if(!isset($_SESSION["sent_rev"])) 
            $_SESSION["sent_rev"] = 0;
        $_SESSION["sent_rev"]++;

        $rev_date = $_POST["rev_date"];
        $rev_vote = $_POST["rev_vote"];

        if(!isset($_SESSION["all_votes"])) 
            $_SESSION["all_votes"] = [];
        array_push($_SESSION["all_votes"], $rev_vote);

        if(!isset($_SESSION["last_date"]))
            $_SESSION["last_date"] = "";
        $_SESSION["last_date"] = $rev_date;
    
    ?>
    <div id="review_container" class="w-50 mx-auto p-3 bg-body-secondary rounded-4 shadow-lg">
        <p> Voto rencensione: <b><?php echo $rev_vote ?>/5 </b></p> <br>
        <p> Data recensione:  <b><?php echo $rev_date ?> </b></p>
        <a href="index.html" target="_self" class="link-info fs-4" style="text-align:center;"> Torna alla HomePage </a>
    </div>

    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>