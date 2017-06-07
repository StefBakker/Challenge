<?
    class UserController
    {
        //check of er ingelogd is
        public function CheckUSER()
        {
            if (!isset($_SESSION['username'])) {
                header('location: ' . URL . 'home/index');
            }
        }
    }