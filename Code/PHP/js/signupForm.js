
$( document ).ready(function() {
    $( "#personRadio" ).on( "click", appendPerson);
    $( "#companyRadio" ).on( "click", appendCompany);
});


function appendCompany(){
    console.log('s')
    $(".inputs").empty()
    $(".inputs").append(
        '<input type="text" hidden name="companyForm" >'+

        '<input type="text" name="name" placeholder="fullname.."  id="name"><br>'+
        '<input type="text" name="username" placeholder="Username..."  id="Username"><br>'+
        '<input type="password" name="pwd" placeholder="password..."  id="Passwords"><br> '+
        '<input type="password" name="pwdrepeat" placeholder="Repeat password..."  id="Repeat"><br> '+
        

        '<input type="email" name="email" placeholder="Johndoe@example.com..."  id="Mail">'+
        '<input type="number" name="phone" placeholder="+31 1234-56-78..." minlength="11" maxlength="15"  id="Phone">'

        
    )
}
function appendPerson(){
    console.log('2')

    $(".inputs").empty()
    $(".inputs").append(
        '<input type="text" hidden name="personForm" >'+

        '<input type="text" name="name" placeholder="fullname.."  id="name"><br>'+
        '<input type="text" name="username" placeholder="Username..."  id="Username"><br>'+
        '<input type="password" name="pwd" placeholder="password..."  id="Passwords"><br> '+
        '<input type="password" name="pwdrepeat" placeholder="Repeat password..."  id="Repeat"><br> '+
        

        '<input type="email" name="email" placeholder="Johndoe@example.com..."  id="Mail">'+
        '<input type="number" name="phone" placeholder="+31 1234-56-78..." minlength="11" maxlength="15"  id="Phone">'
    )
}


