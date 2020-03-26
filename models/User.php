<?php
require_once FULL_FILE_PATH . '/config/database.php';

class User
{


    public function register($data)
    {
        try {

            $upit = "INSERT INTO users(name,email,password) 
                 VALUES ('" . $data['name'] . "','" . $data['email'] . "','" . $data['password'] . "')";

            $query = database::connection()->prepare($upit);
            if ($query->execute()) {
                $_SESSION['is_logged'] = true;
                return true;
            }

            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }


    public  function  login($data)
    {



        $upit = "select * from users where email='" . $data['email'] . "' and password='" . $data['password'] . "'";

        $query = database::connection()->prepare($upit);
        $query->execute();
        $result = $query->fetch();

        if ($result) {

            $_SESSION['name'] = $result['name'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['is_logged'] = true;



            return true;
        }

        return false;
    }

    function checkEmail($email)
    {

        try {
            $sql_type = "SELECT * FROM users WHERE email='" . $email . "'";
            $query = database::connection()->prepare($sql_type);
            $query->execute();
            $result = $query->fetchAll();
            if (count($result) > 0) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}
