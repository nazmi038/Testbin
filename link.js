function validate(){
	var name = document.getElemenById("name");
	if(!name.value){
		alert("Name is Empty!");
	}else {
		regex()
	}
	
	var matric = document.getElemenById("matric");
	if(!matric.value){
		alert("Matric is Empty!");
	}else {
		regex()
	}
	
	var address = document.getElemenById("address");
	if(!address.value){
		alert("Address is not added!");
	}else {
		regex()
	}
	var email = document.getElemenById("email");
	if(!email.value){
		alert("Email is Empty!");
	}else {
		regex()
	}
	var email = document.getElemenById("email");
	if(!email.value){
		alert("email number is Empty!");
	}else {
		regex()
	}
	var telno = document.getElemenById("telno");
	if(!telno.value){
		alert("Tel phone number is Empty!");
	}else {
		regex()
	}
	
	var password = document.getElemenById("password");
	if(!password.value){
		alert("password is Empty!");
	}else {
		regex()
	}
}