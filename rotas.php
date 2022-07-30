<?php
    switch($parse_uri) {
        case "/question":
            QuestionController::questionView();
        break;
        
        case "/question/register":
            QuestionController::registerQuestionView();
        break;

        case "/question/save":
            QuestionController::saveQuestion();
        break;
    }