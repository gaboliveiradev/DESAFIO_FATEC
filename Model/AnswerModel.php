<?php
    class AnswerModel {
        
        public function getAllRows() {
            $dao = new AnswerDAO();
            return $dao->joinSelectQuestionAndAnswer();
        }
    }