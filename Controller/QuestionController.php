<?php
    class QuestionController extends Controller {

        public static function registerQuestionView() {
            parent::render("Question/register_question");
        }
    }