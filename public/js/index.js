
   
$(document).ready(function () { 
    // etc
    $('.make_appointment').click(function(e){
        e.preventDefault()
        console.log('hi');
        $('.content').load('dashapponintment.blade.php')
        
       

    })
});