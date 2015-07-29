<?php include('includes/header.php'); ?>


    <div class="inner class">
      <h1 class="cover-heading">BetterHelp Survey</h1>
      <form method="post" action="result.php">
          <?php if($questions) : ?>
              <?php foreach($questions as $question) :?>
                  <p class="quesiton">
                      <?php echo $question->text;?>
                  </p>
                  <ul class="choices">
                      <?php foreach($choices as $choice) :?>
                          <?php if($choice->question_id == $question->id) :?>
                              <li>
                                <input name="<?php
                                echo $question->type == 'radio' ? 'question'.$question->id : 'checklist[]';
                              ?>" type="<?php echo $question->type;?>" value="<?php echo $choice->id;?>"/><?php echo $choice->text;?>
                              </li>
                              <input name="question_type<?php echo $question->id;?>" value="<?php echo $question->type;?>" type="hidden"/>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
              <?php endforeach; ?>
          <?php else :?>
                <p>NO QUESTION IN DATABASE.</p>
          <?php endif; ?>
          <input name="submit" class="btn btn-primary" type="submit" value="Submit" />
      </form>


    </div>



<?php include('includes/footer.php'); ?>
