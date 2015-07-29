<?php require('core/init.php'); ?>
<?php
  // Create Question Object
  $question = new Question;

  $template = new Template('templates/result.php');

  $total_questions = $question->getTotalQuestions();

  $data = array();
  for($qid = 1; $qid <= $total_questions; $qid++)
  {
    if(isset($_POST['question'.$qid])){
      // $data[(string)$qid] = $_POST['question'.$qid];      old code
      $data[] = $_POST['question'.$qid]; // updated code
    }
  }
  $template->data = $data;
  if(isset($_POST['checklist'])) {
    $template->checklist = $_POST['checklist'];
  }
  $template->total_questions = $total_questions;

  $gender = $_POST['question1'] == 1 ? 'male' : 'female';
  //$template->update = $question->updateChoicePick($data, $gender, true); // old code
  //$template->update2 = $question->updateChoicePick($_POST['checklist'], $gender, false);  // updated code
  $template->update = $question->updateChoicePick($data, $gender); // updated code
  $template->update2 = $question->updateChoicePick($_POST['checklist'], $gender);  // updated code

  /** Most Popular Answers for each question for male **/
  $template->male_list = $question->getMostPopularChoicesByGender('male');

  /** Most Popular Answers for each question for female **/

  $template->female_list = $question->getMostPopularChoicesByGender('female');


  echo $template;
