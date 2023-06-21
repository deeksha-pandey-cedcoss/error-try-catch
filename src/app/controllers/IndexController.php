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
            die;
        } else {
            if (($_POST['email'] == "admin" && $_POST['password'] == "12345")) {
                echo "sucessfull sign in";
                die;
            }
            else {
                $this->logger->info("Login details are $_POST[email] , $_POST[password]");
                $this->response->redirect('index/login');
            }
        }
    }
}
