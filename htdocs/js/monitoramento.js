$.ajax({ 
        url: '../src/ramais.php',        
        type: 'post',
        dataType: 'json',
        success: function(output) {
            alert(output);
        }
});