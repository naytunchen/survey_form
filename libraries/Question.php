<?php
class Question {
    // Init DB Variable
    private $db;

    /*
     * Constructor
     */
    public function __construct() {
        $this->db = new Database;
    }

    /*
     * Get All Questions
     */
    public function getAllQuestions() {
        $this->db->query("SELECT * FROM questions");

        // Assign Result SEt
        $results = $this->db->resultset();
        return $results;
    }

    /*
     * Get Total Question Numbers
     */
    public function getTotalQuestions() {
        $this->db->query("SELECT * FROM questions");

        // Assign Result SEt
        $results = $this->db->resultset();

        return $this->db->rowCount();
    }

    /*
     * Get All Choices
     */
    public function getAllChoices() {
        $this->db->query("SELECT * FROM choices");

        // Assign Result SEt
        $results = $this->db->resultset();
        return $results;
    }

    /*
     * Get All Choice
     */
    public function getChoicesByQuestion($question_id) {
        $this->db->query("SELECT * FROM choices
            WHERE question_id = :question_id
            ORDER BY id ASC");
        $this->db->bind(':question_id', $question_id);

        // Assign Rows
        $rows = $this->db->resultset();
        return $rows;
    }


    /*
     * Get Most Popular Choice By Gender
     */
     public function getMostPopularChoicesByGender($gender) {
       if($gender == 'male')
       {
         // male
         $this->db->query('select cur.question_id, cur.choice_id, cur.num_male, choices.text
                        from picks cur
                        INNER JOIN choices
                        ON choices.id = cur.choice_id
                        where not exists (
                                          select *
                                          from picks high
                                          where high.question_id = cur.question_id
                                          and high.num_male > cur.num_male)
                        ORDER BY cur.question_id ASC

');
       }
       else{
         // female
         $this->db->query('select cur.question_id, cur.choice_id, cur.num_female, choices.text
                        from picks cur
                        INNER JOIN choices
                        ON choices.id = cur.choice_id
                        where not exists (
                                          select *
                                          from picks high
                                          where high.question_id = cur.question_id
                                          and high.num_female > cur.num_female)
                        ORDER BY cur.question_id ASC
');
       }

       // Assign Result SEt
       $results = $this->db->resultset();
       return $results;
     }
    /*
     * Get Most Popular Answer
     */
    public function getMostPopularChoice($question_id) {
        $db->query('SELECT * FROM picks WHERE question_id = :question_id');
        $db->bind(':question_id', $question_id);

        // Assign Rows
        $rows = $db->resultset();

        // Get Count
        // $count = $db->rowCount();
        //
        return $rows;
    }

    /*
     * Update
     */
    public function updateChoicePick($list, $gender, $data) {
        // to update the choice pick

        for($i=0; $i < sizeof($list); $i++)
        {
          if($gender == 'male'){
            // update male case
            $this->db->query('UPDATE picks SET num_male = num_male + 1
                  WHERE choice_id = :choice_id');
            $this->db->bind(':choice_id', $list[$i]);
          }
          else{
            // update female case
                $this->db->query('UPDATE picks SET num_female = num_female + 1
                      WHERE choice_id = :choice_id');
                $this->db->bind(':choice_id', $list[$i]);
          }
          if($this->db->execute()){

          }
          else {
            return false;
          }
        }
        /*
        if($data == true)
        {
          for($i=1; $i < sizeof($list); $i++)
          {
            if($gender == 'male'){
              $this->db->query('UPDATE picks SET num_male = num_male + 1
                    WHERE choice_id = :choice_id');
              $this->db->bind(':choice_id', $list[$i]);
            }
            else{
              if($list[$i] == ''){
                  $this->db->query('UPDATE picks SET num_female = num_female + 1
                        WHERE choice_id = :choice_id');
                  $this->db->bind(':choice_id', $list[$i]);
              }

            }
            if($this->db->execute()){

            }
            else {
              return false;
            }
          }
        }
        else {
          for($i = 0; $i < sizeof($list); $i++)
          {
            if($gender == 'male'){
              $this->db->query('UPDATE picks SET num_male = num_male + 1
                    WHERE choice_id = :choice_id');
              $this->db->bind(':choice_id', $list[$i]);
            }
            else{
              $this->db->query('UPDATE picks SET num_female = num_female + 1
                    WHERE choice_id = :choice_id');
              $this->db->bind(':choice_id', $list[$i]);

            }
            if($this->db->execute()){

            }
            else {
              return false;
            }
          }
        }
        */
    }

}
