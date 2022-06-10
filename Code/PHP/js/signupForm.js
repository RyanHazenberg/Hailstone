
$( document ).ready(function() {
    $( "#personRadio" ).on( "click", appendCompany);
    $( "#companyRadio" ).on( "click", appendPerson);
});


function appendCompany(){
    console.log('s')
    $(".inputs").empty()
    $(".inputs").append(
        '<input type="text" hidden name="companyForm" >'+

        '<input type="text" name="username" placeholder="Username..."  id="Username"><br>'+
        '<input type="password" name="pwdrepeat" placeholder="Repeat password..."  id="Repeat"><br> '+
        '<input type="email" name="email" placeholder="Johndoe@example.com..."  id="Mail">'+
        '<input type="number" name="phone" placeholder="+31 1234-56-78..." minlength="11" maxlength="15"  id="Phone">'+
        '<input type="text" class="company" name="Companyname" placeholder="Companyname..." id="CompanyName">'+
        '<input type="text" class="company" name="Zip-code" placeholder="2837AB..." maxlength="6" id="Zip"><br>'+
        '<input type="text" class="company" name="Adress" placeholder="1 Willow lane..." id="Adress">'+
        '<input type="text" class="company" name="Province/state" placeholder="South-holland/Georgia..." id="Location">'

        
    )
}
function appendPerson(){
    console.log('2')

    $(".inputs").empty()
    $(".inputs").append(
        '<input type="text" hidden name="personForm" >'+

        '<input type="text" name="username" placeholder="Username..."  id="Username"><br>'+
        '<input type="password" name="pwdrepeat" placeholder="Repeat password..."  id="Repeat"><br> '+
        '<input type="email" name="email" placeholder="Johndoe@example.com..."  id="Mail">'+
        '<input type="number" name="phone" placeholder="+31 1234-56-78..." minlength="11" maxlength="15"  id="Phone">'
    )
}


