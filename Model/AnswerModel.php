<?php
    namespace DESAFIO_FATEC\Model;
    use DESAFIO_FATEC\DAO\AnswerDAO;

    class AnswerModel {
        
        public function getAllRows() {
            $dao = new AnswerDAO();
            return $dao->joinSelectQuestionAndAnswer();
        }

        public function getAllRowsFilter() {
            $dao = new AnswerDAO();
            return $dao->getAllRowsFilter();
        }

        public function getAllRowsQuestionFilter(int $id) {
            $dao = new AnswerDAO();
            return $dao->getAllRowsQuestionFilter( (int) $id );
        }
    }