<?php
    switch($parse_uri) {
        // --= Question =--
        case "/question-manage":
            QuestionController::questionManage();
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

        case "/question":
            QuestionController::questionAnswer();
        break;

        // --= Answer =--
        case "/answer/save":
            QuestionController::saveAnswer();
        break;

        case "/answer-manage":
            AnswerController::answerManage();
        break;

        // --= Login =--
        case "/login":
            LoginController::loginView();
        break;

        case "/login/authenticate":
            LoginController::loginAuthenticate();
        break;

        case "/logout":
            LoginController::logout();
        break;

        default:
            header("Location: /question");
        break;
    }