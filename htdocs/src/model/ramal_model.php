<?php

require('../config.php');

class Ramal {

    public function verificar_ramal() {                                      

        $conn = new Database();
        $result = $conn->executeQuery('SELECT * FROM ded');
        
        if($result){

            return $result->fetchAll(PDO::FETCH_ASSOC);  

        }
    }
    
}

?>