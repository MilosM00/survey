<?php

    include_once("config/config.php");
    include_once("classes/Database.php");
    include_once("classes/Survey.php");

    $survey = new Survey();

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $survey->insertSurvey($_POST["Q1"], $_POST["Q2"], $_POST["Q3"], $_POST["Q4"], $_POST["Q5"], $_POST["Q6"], $_POST["Q7"], $_POST["Q8"], $_POST["Q9"], $_POST["Q10"], $_POST["Q11"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("partials/head.html"); ?>

    <link rel="stylesheet" href="styles/thank-you.css">
    
    <title>Thank You - Survey | Eagle</title>
</head>

<body>

    <?php include("partials/navbar.html"); ?>
    
    <div class="container">
        <h1>Thank You!</h1>

        <p>
            Your responses have been forwarded to our customer service colleagues.
        </p>
    </div>

    <?php include("partials/footer.html"); ?>

</body>

</html>