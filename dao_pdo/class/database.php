<?php

class Database extends PDO {

    private $conn;

    public function __construct() {
        try
        {
            $this->conn = new PDO("mysql:host=localhost;dbname=juntei_financeiro", "root", "447466");
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statment, $key, $value);

        }
    }

    private function setParam($statment, $key, $value){

        $statment->bindParam($key, $value);

    }

    public function executeQuery($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array
    {

        $stmt = $this->executeQuery($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}
