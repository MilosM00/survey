<?php

    session_start();

    include_once("config/config.php");
    include_once("classes/Database.php");
    include_once("classes/Survey.php");
    
    if($_SESSION["logged_in"] == false)
    {
        header("location:login.php");
        exit;
    }
    
    $survey = new Survey();

    $answers = $survey->getAllAnswers();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("partials/head.html"); ?>

    <link rel="stylesheet" href="styles/dashboard.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/footer.css">
    
    <title>DASHBOARD - Survey | Eagle</title>
</head>

<body>

    <?php include("partials/navbar.html"); ?>
    
    <div class="container">
        <table>
            <tbody>

                <tr>
                    <td><b>Survey ID</b></td>
                    <td><b>How would you rate the quality of the service you are using?</b></td>
                    <td><b>How would you rate the professionalism and helpfulness of our technical support administrators?</b></td>
                    <td><b>Are you satisfied with the quality of service, technical expertise, and responses provided by the administrators you spoke with?</b></td>
                    <td><b>How would you rate the speed at which our technical support team resolved your issue?</b></td>
                    <td><b>Do you always get your issue resolved or receive the requested response after contacting Eagle's technical support?</b></td>
                    <td><b>How would you rate our technician's response time and the speed of work completion at your location?</b></td>
                    <td><b>How would you rate the professionalism and expertise of the technician who provided the service?</b></td>
                    <td><b>After the intervention, did the service work as expected?</b></td>
                    <td><b>Once your contract expires, would you consider renewing your cooperation with Eagle?</b></td>
                    <td><b>How likely are you to recommend Eagle to your business partners and associates? (1 - Not at all, 10 - Very likely)</b></td>
                    <td><b>If you have any suggestions, feedback, or comments, please enter them in the field below. Your feedback helps us improve our services.</b></td>
                    <td><b>Survey Date</b></td>
                </tr>

                <?php foreach($answers as $answer): ?>
                    <tr>
                        <td><?php echo $answer->survey_id; ?></td>
                        <td><?php echo $answer->survey_question_1; ?></td>
                        <td><?php echo $answer->survey_question_2; ?></td>
                        <td><?php echo $answer->survey_question_3; ?></td>
                        <td><?php echo $answer->survey_question_4; ?></td>
                        <td><?php echo $answer->survey_question_5; ?></td>
                        <td><?php echo $answer->survey_question_6; ?></td>
                        <td><?php echo $answer->survey_question_7; ?></td>
                        <td><?php echo $answer->survey_question_8; ?></td>
                        <td><?php echo $answer->survey_question_9; ?></td>
                        <td><?php echo $answer->survey_question_10; ?></td>
                        <td><?php echo $answer->survey_question_11; ?></td>
                        <td><?php echo $answer->survey_date; ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <?php
        include("partials/admin.php");
        include("partials/footer.html");
    ?>

</body>

</html>