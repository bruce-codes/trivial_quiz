<?php
/* session_start() muss voe dem gebra...*/

session_start();

// Hilfswerkzeuge laden
require_once 'tools.php';
require_once 'db.php';


// $totalQuestions = $_SESSION['totalQuestions'];
// $_SESSION['totalQuestions'] = $totalQuestions;

// $filteredRows = $_SESSION['filteredRows'];
// $topic = $_SESSION['topic'];

// // Display the next question
// if(isset($_SESSION['numQuestions']))
//     {
//         $questionNo = $_SESSION['numQuestions'];
//         $questionNo--;

//         if($questionNo < 0)
//             {
//                 header("Location: ./result.php");
//                 exit();
//             }
//     }

// else
//     {
//         echo "cannot find Question Numbers";

//         err_rnd();
//         exit();
//     }

// // check if a score has already been set for 
// if(isset($_SESSION['score']))
//     {
//         $score = $_SESSION['score'];
//         $_SESSION['score'] = $score;
//     }

// else
//     {
//         echo "Score not found!";
//         err_rnd();
//     }
?>