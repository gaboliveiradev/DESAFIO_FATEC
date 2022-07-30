<?php
    class QuestionModel {

        public $id, $descricao;

        public function saveQuestion() {
            $dao = new QuestionDAO();
            return($this->id == null) ? $dao->insertQuestion($this) : $dao->updateQuestion($this);
        }
    }