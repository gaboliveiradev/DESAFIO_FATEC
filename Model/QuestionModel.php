<?php
    class QuestionModel {

        public $id, $descricao;
        public $arr_question;

        public function saveQuestion() {
            $dao = new QuestionDAO();
            return($this->id == null) ? $dao->insertQuestion($this) : $dao->updateQuestion($this);
        }

        public function getAllRows() {
            $dao = new QuestionDAO();
            $this->arr_question = $dao->getAllRows();
        }
    }