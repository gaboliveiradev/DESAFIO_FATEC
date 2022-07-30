<?php
    class QuestionController extends Controller {

        public static function questionForm() {
            $model = new QuestionModel();
            if(isset($_GET['id'])) $model = $model->getById( (int) $_GET['id']);

            parent::render("Question/register_question", $model);
        }
        
        public static function questionView() {
            $model = new QuestionModel();
            $model->getAllRows();

            include "./View/modules/Question/question_view.php";
        }

        public static function saveQuestion() {
            $model = new QuestionModel();
            $model->id = $_POST['id'];
            $model->descricao = $_POST['descricao'];
            $model->saveQuestion();
            header("Location: /question");
        }

        public static function deleteQuestion() {
            $model = new QuestionModel();
            $model->delete( (int) $_GET['id']);
            header("Location: /question");
        }
    }