<?php


class Database
{

    /**
     * @var string Name of server .
     */
    public static $servername = "127.0.0.1";
    /**
     * @var string Username on server.
     */
    public static $username = "root";
    /**
     * @var string Password on server.
     */
    public static $password = "";
    /**
     * @var string Name of database.
     */
    public static $dbname = "todotasks";
    /**
     * @var string for creating connection on database.
     */
    public static $conn;

    /**
     * Function which allows connection on database.
     * @return PDO
     * @throws Exception
     */
    public static function connection()
    {
        try {
            if (self::$conn == null) {
                self::$conn = new PDO("mysql:host=" . self::$servername . ";dbname=" . self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            return self::$conn;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Function which allows to disconnect from database.
     * @throws Exception
     */
    public function disconnect()
    {
        try {
            self::$conn = null;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}
