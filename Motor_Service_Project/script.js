$(document).ready(function(){
    $('#myForm').submit(function(e){
        e.preventDefault(); 
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'submit.php', 
            data: formData,
            success: function(response){
                $('#result').html(response); 
                window.location.href="display_details.php";  
            }
        });
    });
});
