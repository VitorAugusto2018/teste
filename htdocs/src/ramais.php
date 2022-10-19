<?php    

require('model/ramal_model.php');

class Ramais
{          

    public function verificar_status() {                

        $ramal = new Ramal();
        $ramalresult = $ramal->verificar_ramal();                

        echo json_encode($ramalresult);
    
    }

}