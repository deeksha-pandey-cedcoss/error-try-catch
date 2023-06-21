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

        $email = $_POST['email'];
        if (($email) == "") {
            echo "enter_data for the fields";
            die;
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "$email is a valid email address <br> ";
            } else {
                echo "$email is not a valid email address <br>";
                throw new Exception("not a valid email address ");
            }
        }

        try {
            echo "Done <br>";
        } finally {
            echo "Process complete.";
            die;
        }
    }
}
