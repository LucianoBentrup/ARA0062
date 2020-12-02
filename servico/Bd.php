<?php

class Bd {
    
    private $dsn, $user, $password, $conn;
    
    function __construct() {
        $this->dsn = 'mysql:dbname=id14773246_site;host=localhost';
        $this->user = 'id14773246_site1';
        $this->password = 'SSdv/h4/u2md%w[B';
        
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
    
    /**
     * Rodar uma consulta select
     **/
    function query($sql) {
       try {
           return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
        
        
    }
    
    /**
     * Executar sql = insert, update, delete
     * */
    function exec($sql){
         try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
        
    }
}


?>