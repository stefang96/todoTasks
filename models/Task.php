<?php
require_once FULL_FILE_PATH . '/config/database.php';

class Task
{

    public function getTasks()
    {
        try {


            $upit = "SELECT * FROM tasks";

            $query = database::connection()->prepare($upit);
            $query->execute();

            return $query->fetchAll();;


            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    public function delete($id)
    {
        try {


            $upit = "DELETE FROM tasks WHERE id=" . $id;

            $query = database::connection()->prepare($upit);

            if ($query->execute()) {

                return true;
            }


            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }


    public function edit($id, $data)
    {

        $chb = isset($_POST['chb']) ? 'true' : 'false';
        $data['description'] = trim($_POST['description']);

        try {


            $upit = "UPDATE tasks SET title='" . $data['title'] . "',description='" . $data['description'] . "',due_date='" . $data['date'] . "',blocked=" . $chb . ",status='" . $data['selectList'] . "' WHERE id=" . $id;

            $query = database::connection()->prepare($upit);
            if ($query->execute()) {

                return true;
            }

            return false;
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    public function getTask($id)
    {
        try {


            $upit = "Select * FROM tasks WHERE id=" . $id;

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
        $data['description'] = trim($_POST['description']);

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
