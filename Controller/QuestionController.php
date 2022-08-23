<?php
    namespace DESAFIO_FATEC\Controller;
    use DESAFIO_FATEC\Model\QuestionModel;

    class QuestionController extends Controller {

        public static function questionForm() {
            parent::isAuthenticated();
            $model = new QuestionModel();
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id']);

            parent::render("Question/question_form", $model);
        }

        public static function questionAnswer() {
            $model = new QuestionModel();
            $arr_question = $model->getAllRows();

            include "./View/modules/Question/question_answer.php";
        }
        
        public static function questionManage() {
            parent::isAuthenticated();
            $model = new QuestionModel();

            if(isset($_GET['query'])) {
                $arr_question = $model->queryQuestion($_GET['query']);
            } else {
                $arr_question = $model->getAllRows();
            }

            include "./View/modules/Question/question_manage.php";
        }

        public static function clearQuery() {
            parent::isAuthenticated();
            unset($_GET['query']);
            header("Location: /question-manage");
        }

        public static function clearQueryQuestionDeleted() {
            parent::isAuthenticated();
            unset($_GET['query']);
            header("Location: /question/deleted");
        }

        public static function saveQuestion() {
            parent::isAuthenticated();
            $model = new QuestionModel();
            $model->id = $_POST['id'];
            $model->descricao = $_POST['descricao'];
            $model->saveQuestion();
            header("Location: /question-manage");
        }

        public static function deleteQuestion() {
            parent::isAuthenticated();
            $model = new QuestionModel();
            $model->delete( (int) $_GET['id']);
            header("Location: /question-manage");
        }

        public static function saveAnswer() {
            parent::isAuthenticated();
            $model = new QuestionModel();
            $arr_question = $model->getAllRows();
            $arr_answer = []; 
            $arr_ids = [];

            $model->questions = count($arr_question);
            for($i = 1; $i < count($arr_question) + 1; $i++) {
                $name_answer = "question_$i";
                $id_answer = "id_$i";
                $arr_answer[$i] = $_POST[$name_answer];
                $arr_ids[$i] = $_POST[$id_answer];
            }

            $model->saveAnswer($arr_answer, $arr_ids);
            header("Location: /question");
        }

        public static function questionDeleted() {
            parent::isAuthenticated();
            $model = new QuestionModel();

            if(isset($_GET['query'])) {
                $arr_question_deleted = $model->queryQuestionDeleted($_GET['query']);
            } else {
                $arr_question_deleted = $model->getAllRowsWhereAtivo();
            }
            
            include "./View/modules/Question/question_deleted.php";
        }

        public static function toRestore() {
            parent::isAuthenticated();
            $model = new QuestionModel();
            $model->toRestore( (int) $_GET['id'] );

            header("Location: /question/deleted");
        }
    }