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
      $data[] = $_POST['question'.$qid];
    }
  }
  $template->data = $data;
  if(isset($_POST['checklist'])) {
    $template->checklist = $_POST['checklist'];
  }
  $template->total_questions = $total_questions;

  $gender = $_POST['question1'] == 1 ? 'male' : 'female';
  $template->update = $question->updateChoicePick($data, $gender, true);
  $template->update2 = $question->updateChoicePick($_POST['checklist'], $gender, false);

  /** Most Popular Answers for each question for male **/
  $template->male_list = $question->getMostPopularChoicesByGender('male');

  /** Most Popular Answers for each question for female **/

  $template->female_list = $question->getMostPopularChoicesByGender('female');


  echo $template;
