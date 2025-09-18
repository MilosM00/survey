<?php

class Survey
{
    private $connection;
    private $table = "survey";

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->getConnection();
    }

    public function insertSurvey($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11)
    {
        if(empty($q11))
        {
            $q11 = "EMPTY";
        }

        $query = "INSERT INTO " . $this->table . "(survey_question_1, survey_question_2, survey_question_3, survey_question_4, survey_question_5, survey_question_6, survey_question_7, survey_question_8, survey_question_9, survey_question_10, survey_question_11) VALUES(:q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10, :q11)";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(":q1", $q1);
        $stmt->bindParam(":q2", $q2);
        $stmt->bindParam(":q3", $q3);
        $stmt->bindParam(":q4", $q4);
        $stmt->bindParam(":q5", $q5);
        $stmt->bindParam(":q6", $q6);
        $stmt->bindParam(":q7", $q7);
        $stmt->bindParam(":q8", $q8);
        $stmt->bindParam(":q9", $q9);
        $stmt->bindParam(":q10", $q10);
        $stmt->bindParam(":q11", $q11);
        $stmt->execute();

        return true;
    }
}