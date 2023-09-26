<?php
    /* Muss ganz am Anfang der Hauptseite sein, 
        enthält start_session(). */
    require "./includes/data-collector.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php

        // Hole die Daten für die aktuelle Frage aus der Datenbank.
        // $questionId = 104;
        // $question = fetchQuestionById($questionId, $dbConnection);
        // prettyPrint($question);

        $questionID = fetchQuestionBYSequence('language', 15, $dbConnection); // get back a string

        // prettyPrint($questionID['id']);

        $question = fetchQuestionById($questionID['id'], $dbConnection); // $questionID need to be converted to an int

        prettyPrint($question);
    ?>



    <!-- FORMULAR "Fragestellung" -->
    <div class="row" style="padding: 20px;">
        <div class="col-sm-8">
            <!-- Fragestellung -->
            <h7>Frage 1 von 10</h7>
            <!--p>&nbsp;</p-->
            <h3><?php echo $question["question_text"]; ?></h3>
            <p>&nbsp;</p>



            <form id="quiz-form" action="" method="post" onsubmit="">
            <!-- PHP Loop für die Fragen ($question) -->
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html"><?php echo $question["answer_1"]; ?></label><br>

            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css"><?php echo $question["answer_2"]; ?></label><br>

            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript"><?php echo $question["answer_3"]; ?></label>

                <!-- button type="submit" class="btn btn-primary" onclick="navigatePrevious();">Previous</button -->
                
            <input type="submit" class="btn btn-primary" value="Next">
          
            </form>
        </div>
    </div>

</body>
</html>