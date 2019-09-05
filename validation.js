function validateform()                                 
{ 
    var name = document.forms["form_name"]["name"];               
    var email = document.forms["form_name"]["email"];     
    var subject =  document.forms["form_name"]["subject"];  
        var message = document.forms["form_name"]["message"]; 
        var len = {min:4,max:60};
        var mes = {min:20};

        if (name.value == "")                                  
    { 
        window.alert("Please enter your name."); 
        name.focus(); 
        return false; 
    } 
    if (name.value.length < len.min || name.value.length > len.max) {
        window.alert ('Name not less than 4 letters');  
        return false; }                             
    
 
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
    if (subject.value == "")                                  
    { 
        window.alert("Please enter your subject."); 
        subject.focus(); 
        return false; 
    } 
    if (message.value == "")                                  
    { 
        window.alert("Type your message."); 
        message.focus(); 
        return false; 
    } 
    if (message.value.length < mes.min ) {
        window.alert ('Message not less than 20 letters');  
        return false; } 

    
    return true; 
}