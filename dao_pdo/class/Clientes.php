<?php

    class Clientes
    {
        private $database;

        private $nome;
        private $email;
        private $carteira;
        private $login;
        private $senha;
        private $date;

        public function __construct()
        {
            $this->database = new Database();
        }

        public function loadById(int $id)
        {
            $params = array(
                ":ID" => $id
            );

            $result = $this->database->select("SELECT * FROM clientes WHERE id = :ID", $params);

            if(empty($result) === false)
            {
                $this->setNome($result[0]['nome']);
                $this->setEmail($result[0]['email']);
                $this->setCarteira($result[0]['carteira']);
                $this->setLogin($result[0]['login']);
                $this->setSenha($result[0]['senha']);
                $this->setDate(new DateTime($result[0]['date']));
            }
        }

        public function getList()
        {
            $params = array();

            return $this->database->select("SELECT * FROM clientes", $params);
        }

        public function registerCustomer():bool
        {
            $params = array(
                ":NOME"      => $this->getNome(),
                ":EMAIL"     => $this->getEmail(),
                ":CARTEIRA"  => $this->getCarteira(),
                ":LOGIN"     => $this->getLogin(),
                ":SENHA"     => $this->getSenha(),
                ":DATE"      => $this->getDate()
            );

            $result = $this->database->executeQuery("INSERT INTO clientes (nome,email,carteira,login,senha,date) VALUES :NOME,:EMAIL,:CARTEIRA,:LOGIN,:SENHA,:DATE", $params);

            $this->database->commit();

            if($result)
            {

                return false;
            }

            return true;
        }

        public function __toString()
        {
            return json_encode(array(
                "nome"      => $this->getNome(),
                "email"     => $this->getEmail(),
                "carteira"  => $this->getCarteira(),
                "login"     => $this->getLogin(),
                "senha"     => $this->getSenha(),
                "date"      => $this->getDate()
            ));
        }

        public function setNome($value)
        {
            $this->nome = $value;
        }

        private function getNome()
        {
            return $this->nome;
        }

        public function setEmail($value)
        {
            $this->email = $value;
        }

        private function getEmail()
        {
            return $this->email;
        }

        public function setCarteira($value)
        {
            $this->carteira = $value;
        }

        private function getCarteira()
        {
            return $this->carteira;
        }

        public function setLogin($value)
        {
            $this->login = $value;
        }

        private function getLogin()
        {
            return $this->login;
        }

        public function setSenha($value)
        {
            $this->senha = $value;
        }

        private function getSenha()
        {
            return $this->senha;
        }

        public function setDate($value)
        {
            $this->date = $value;
        }

        private function getDate()
        {
            return $this->date;
        }
    }

?>