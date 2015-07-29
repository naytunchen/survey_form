<?php include('includes/header.php'); ?>
<?php $previous_id = -1;?>

<div class="inner cover">
  <h1 class="cover-heading">Most Popular Answers</h1>
  <div>
  <div class="bh_male_col" >
      <h4> Males' Answers</h4>
      <?php foreach($male_list as $pop_choice) : ?>
          <?php if($pop_choice->question_id != $previous_id) :?>
              <hr class="bh_line"/>
              <p>Question <?php echo $pop_choice->question_id;?></p>
          <?php endif; ?>
          <p><?php echo $pop_choice->text;?></p> <br/>
          <?php $previous_id = $pop_choice->question_id;?>
      <?php endforeach;?>
  </div>
  <div class="bh_female_col">
      <h4> Females' Answers</h4>
      <?php foreach($female_list as $pop_choice) : ?>
          <?php if($pop_choice->question_id != $previous_id) :?>
              <hr class="bh_line"/>
              <p>Question <?php echo $pop_choice->question_id;?></p>
          <?php endif; ?>
          <p><?php echo $pop_choice->text;?></p> <br/>
          <?php $previous_id = $pop_choice->question_id;?>
      <?php endforeach;?>
  </div>

</div>
<a href="index.php" class="btn btn-default bh_btnsss">Retake Quiz</a>
</div>


<?php include('includes/footer.php'); ?>
