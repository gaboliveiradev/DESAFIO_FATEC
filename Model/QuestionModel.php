<?php
    class QuestionModel {

        public $id, $descricao;

        public function saveQuestion() {
            $dao = new QuestionDAO();
            return($this->id == null) ? $dao->insertQuestion($this) : $dao->updateQuestion($this);
        }

        public function getAllRows() {
            $dao = new QuestionDAO();
            return $dao->getAllRows();
        }

        public function delete(int $id) {
            $dao = new QuestionDAO();
            $dao->delete($id);
        }

        public function getById(int $id) {
            $dao = new QuestionDAO();
            $obj = $dao->getById($id);
            return ($obj) ? $obj : new QuestionModel();
        }

        public function queryQuestion($data_query) {
            $dao = new QuestionDAO();
            return $dao->queryQuestion($data_query);
        }
    }