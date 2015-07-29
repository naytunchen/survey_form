<?php
/*
 * Get Choices by Question
 */
function getChoicesByQuestion($question_id) {
    $db = new Database;

    $db->query('SELECT * FROM choices WHERE question_id = :question_id');
    $db->query(':question_id', $question_id);

    // Assign Rows
    $rows = $db->resultset();
    return $rows;
}
