 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(5);
	 $('.wrapper').addClass('form-success');
	 document.ready(window.setTimeout(location.href = "Admindesk.php",5000));
});