<?php
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
        $questionID = fetchQuestionBYSequence('language', 15, $dbConnection);
        $question = fetchQuestionById($questionID['id'], $dbConnection); 
        prettyPrint($question);
    ?>
    <!-- FORMULAR "Fragestellung" -->
    <div class="row" style="padding: 20px;">
        <div class="col-sm-8">
            <!-- Fragestellung -->
            <h7>Frage 1 von 15</h7>
            <!--p>&nbsp;</p-->
            <h3><?php echo $question["question_text"]; ?></h3>
            <p>&nbsp;</p>
            <form id="quiz-form" action="" method="post" onsubmit="">
            <!-- PHP Loop für die Fragen ($question) -->
            <input type="radio" name="antwort" value="1">
            <label for="answer_1"><?php echo $question["answer_1"]; ?></label><br>

            <input type="radio" name="antwort" value="">
            <label for="answer_2"><?php echo $question["answer_2"]; ?></label><br>

            <input type="radio" name="antwort" value="">
            <label for="answer_3"><?php echo $question["answer_3"]; ?></label> 

            <input type="submit" class="btn btn-primary" value="Next">
            <input type="submit" class="btn btn-primary" value="Previous">         
            </form>
        </div>
    </div>
</body>
</html>