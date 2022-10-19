$.ajax({
    url: "../src/ramais.php",  
    type: "POST",
    success: function(data){                
        
        if(data){

            console.log('ola');

        }
        
    },
    error: function(){
        console.log("Errouu!")
    }
});