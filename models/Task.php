<?php
require_once FULL_FILE_PATH . '/config/database.php';

class Task
{

    public function getTasks()
    {
        try {


            $upit = "Select * from tasks";

            $query = database::connection()->prepare($upit);
            $query->execute();

            return $query->fetchAll();;


            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }


    public function create($data)
    {

        $chb = isset($_POST['chb']) ? 'true' : 'false';

        try {


            $upit = "INSERT INTO tasks(title,description,due_date,blocked,status) 
                 VALUES ('" . $data['title'] . "','" . $data['description'] . "','" . $data['date'] . "'," . $chb . ",'" . $_POST['selectList'] . "')";

            $query = database::connection()->prepare($upit);
            if ($query->execute()) {

                return true;
            }

            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
}