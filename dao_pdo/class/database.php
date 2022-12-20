<?php

class Database extends InfoDatabase {

    private $conn;

    public function __construct()
    {
        try
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=juntei_financeiro", "root", "");

            $this->conn->setAttribute(PDO::ATTR_AUTOCOMMIT, 1);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
            die;
        }
    }

    private function setParams($statment, $parameters = array())
    {
        foreach ($parameters as $key => $value)
        {
            $this->setParam($statment, $key, $value);
        }
    }

    private function setParam($statment, $key, $value)
    {
        $statment->bindParam($key, $value);
    }

    public function executeQuery($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
        
        $this->setParams($stmt, $params);
        
        try
        {
            $stmt->execute();
            return $stmt;
        }
        catch(PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
            die;
        }
    }
    public function select($rawQuery, $params = array()):array
    {
        $stmt = $this->executeQuery($rawQuery, $params);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
