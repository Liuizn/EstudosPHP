<?php
    class InfoDatabase
    {           
        private $db_host;
        private $db_dbname;
        private $db_user;
        private $db_password;

        private function __construct()
        {
            $this->db_host     = 'localhost';
            $this->db_dbname   = 'juntei_financeiro';
            $this->db_user     = 'root';
            $this->db_password = '';
        }
    }
