 <!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css" />
 </head>
 <body>
 	<?php
 		$answer1 = $_POST["question-1-answers"];
 		$answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
    	$totalScore = 0;
    	
    	if ($answer1 == "D") { $totalScore++; }
    	if ($answer2 == "B") { $totalScore++; }
        if ($answer3 == "D") { $totalScore++; }
        if ($answer4 == "B") { $totalScore++; }
        if ($answer5 == "A") { $totalScore = $totalScore + 5; }
        if ($answer5 == "B") { $totalScore = $totalScore + 4; }
        if ($answer5 == "C") { $totalScore = $totalScore + 3; }
        if ($answer5 == "D") { $totalScore = $totalScore + 2; }
        if ($answer5 == "E") { $totalScore = $totalScore + 1; }
        
        echo "<div id='results'>You Scored: </div>";   
    	echo "<div id='results'>$totalScore / 9 </div>";         
 	?>
 
 </body>
 </html>
 
	
