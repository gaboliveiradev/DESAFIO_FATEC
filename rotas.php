<?php
    use DESAFIO_FATEC\Controller\{
        QuestionController,
        AnswerController,
        EmployeeController,
        LoginController
    };

    $parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    switch($parse_uri) {
        // --= Question(Pergunta) =--
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

        case "/question/deleted":
            QuestionController::questionDeleted();
        break;

        case "/question/deleted/clear-query":
            QuestionController::clearQueryQuestionDeleted();
        break;

        case "/question/to-restore":
            QuestionController::toRestore();
        break;

        case "/question":
            QuestionController::questionAnswer();
        break;

        // --= Answer(Resposta) =--
        case "/answer/save":
            QuestionController::saveAnswer();
        break;

        case "/answer-manage":
            AnswerController::answerManage();
        break;

        case "/answer-manage/clear-filter":
            AnswerController::clearFilter();
        break;

        // --= Employee(Funcionário) =--
        case "/employee/form":
            EmployeeController::employeeForm();
        break;

        case "/employee/save":
            EmployeeController::saveEmployee();
        break;

        case "/employee-manage":
            EmployeeController::employeeManage();
        break;

        case "/employee/delete":
            EmployeeController::employeeDelete();
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