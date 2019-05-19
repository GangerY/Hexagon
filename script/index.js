$( document ).ready(function() {
	let flagButton = true;
	let modalWindowEl = document.querySelector('#wrapper');
	let btnEl = document.querySelector('#btn');

	let name = document.forms["0"]["0"];               
	let email = document.forms["0"]["1"];  

	btnEl.addEventListener("click", function(){
		if (name.value == "")                                  
		{ 
				window.alert("Please enter your name."); 
				name.focus(); 
				return false; 
		}
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
			if(flagButton){
				sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php');
				flagButton = false;
			return false;
		}
	});

});