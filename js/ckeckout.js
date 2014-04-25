document.querySelector('input[type=email]').oninvalid = function() {
	
	//remove mensagens de erro antigas
	this.setCustomValidity("");
	
	//reexecuta valida��o
	if (!this.validity.valid){
		
		//se valido. coloca mensagem de erro.
		this.setCustomValidity("Email Inv�lido");
	}
}