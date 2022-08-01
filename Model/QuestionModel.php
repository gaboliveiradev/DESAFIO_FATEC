<?php
    class QuestionModel {

        public $id, $descricao;
        public int $questions;

        public function saveQuestion() {
            $dao = new QuestionDAO();
            return($this->id == null) ? $dao->insertQuestion($this) : $dao->updateQuestion($this);
        }

        public function saveAnswer($arr_answer, $arr_ids) {
            $dao = new QuestionDAO();
            $dao->insertAnswer($this, $arr_answer, $arr_ids);
        }

        public function getAllRows() {
            $dao = new QuestionDAO();
            return $dao->getAllRows();
        }

        public function getAllRowsWhereAtivo() {
            $dao = new QuestionDAO();
            return $dao->selectQuestionWhereAtivo();
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

        public function toRestore(int $id) {
            $dao = new QuestionDAO();
            $dao->restoreQuestion( (int) $id );
        }
    }