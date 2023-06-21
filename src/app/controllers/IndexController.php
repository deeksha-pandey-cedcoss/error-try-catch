<?php

use Phalcon\Mvc\Controller;

// defalut controller view
class IndexController extends Controller
{
    public function indexAction()
    {
        //   default action
    }
    public function loginAction()
    {
        if (($_POST['email']) == "" || ($_POST['password']) == "") {
            echo "enter_data for the fields";
            trigger_error("Input Fields are empty", E_USER_ERROR);
            die;
        } else {
            echo "success";
            die;
        }

        function customError($errno, $errstr)
        {
            echo "<b>Error:</b> [$errno] $errstr<br>";
            echo "Ending Script";
            die();
        }

        //set error handler

        set_error_handler("customError", E_USER_ERROR);
    }
}
