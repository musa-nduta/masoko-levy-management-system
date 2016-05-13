function searcher(){
   $.ajax(
    {
        type: 'POST',
        url: 'vendor-search-engine.php',
        dataType: 'json',
        success: function(data){
            console.log(data);
        }
    }
   ); 
 }

