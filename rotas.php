<?php
    switch($parse_uri) {
        // --= Question =--
        case "/question-manage":
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

        case "/question/clear-query":
            QuestionController::clearQuery();
        break;

        // --= Login =--
        case "/login":
            LoginController::loginView();
        break;

        case "/login/authenticate":
            LoginController::loginAuthenticate();
        break;
    }