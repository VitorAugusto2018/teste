<?php

class Ramais
{
    private $mysql;      

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function verificar_status()
    {                        
        $resultado = $this->mysql->query('SELECT r.userName FROM teste.ramais r');
        $ramal = $resultado->fetch_all(MYSQLI_ASSOC);        

        echo json_encode($ramal);

    }

}