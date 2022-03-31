function validate(){
	var firstname = document.getElemenById("firstname");
	if(!firstname.value){
		alert("First Name is Empty!");
	}else {
		regex()
	}
	
	var lastname = document.getElemenById("lastname");
	if(!lastname.value){
		alert("Last Name is Empty!");
	}else {
		regex()
	}
	
	var gender = document.getElemenById("gender");
	if(!gender.value){
		alert("Gender is not added!");
	}else {
		regex()
	}
	var birthday = document.getElemenById("birthday");
	if(!birthday.value){
		alert("Birthday is Empty!");
	}else {
		regex()
	}
	var telno = document.getElemenById("telno");
	if(!telno.value){
		alert("Tel phone number is Empty!");
	}else {
		regex()
	}
	var email = document.getElemenById("email");
	if(!email.value){
		alert("email number is Empty!");
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