<?php
    switch($parse_uri) {
        case "/question":
            QuestionController::questionView();
        break;
        
        case "/question/form":
            QuestionController::questionForm();
        break;

        case "/question/save":
            QuestionController::saveQuestion();
        break;

        case "/question/delete":
            QuestionController::deleteQuestion();
        break;
    }