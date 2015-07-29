<?php require('core/init.php');?>
<?php
// Create Question Object
$question = new Question();

// Get Template & Assign Vars
$template = new Template('templates/index.php');

// Assign Variables
$template->questions = $question->getAllQuestions();
$template->choices = $question->getAllChoices();

// Display template
echo $template;
