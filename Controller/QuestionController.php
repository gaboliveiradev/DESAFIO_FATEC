<?php
    class QuestionController extends Controller {

        public static function registerQuestionView() {
            parent::render("Question/register_question");
        }

        public static function saveQuestion() {
            $model = new QuestionModel();
            $model->descricao = $_POST['descricao'];
            $model->saveQuestion();
            header("Location: /question/register");
        }
    }