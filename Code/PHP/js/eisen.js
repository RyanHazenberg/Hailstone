$("#eisToevoeg").click(function(e){
    e.preventDefault();
    $("#eisen").append(
    '<div><p>eis 1</p><input name="eis[]" type="text"> </input> <p class="verwijder"> Verwijder Eis</p></div>')



    $('.verwijder').on('click', verwijder);

})


function verwijder(e){
    e.preventDefault();
    var el = $(this).closest('div');

        el.remove();
};
