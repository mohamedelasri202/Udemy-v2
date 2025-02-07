<?php
/*
*PDO DATABASE CLASS 
*connect to database 
*create prepared statments
*bind values
return rows and results
*/
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    private $dbh;

    private $stmt;
    private $error;
    public function __construct()
    {
        $dsn = 'pgsql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            echo "3la slamtak";
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo "An error occurred while connecting to the database." . $e->getMessage();
        }
    }

    // prepare statment
    public function query($sql)
    {
        $this->stmt =  $this->dbh->prepare($sql);
    }
    // bind values 
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    // excute the prepared statment 
    public function excute()
    {
        return $this->stmt->excute();
    }
    // get resuls set as array of the objects 
    public function resultSet()
    {
        $this->excute();
    }
}
