$( "#createVacButt" ).on( "click", melding )

function melding(e){
    console.log('ss')
    e.preventDefault();
    var form = $(this).closest('form');
    console.log(form)
    $.ajax({
        type: "POST",
        url: 'api_backend/maakVac_Be.php',
        data: form.serialize(),            
                                
            success: function(response)
            {
                console.log(response)


                    alertBox()
            }
    })
}


function alertBox(){

        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Vacature aangemaakt',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true
    
        })                   
}