function to_edit_member(){
	window.location = "member_edit?id="+document.getElementById("main_member_id").value;
}

function to_edit_product(){
	window.location = "product_edit?id="+document.getElementById("main_product_id").value;
}

function to_append_product(){
	var body = document.getElementById("cashout_form");
	var input = document.createElement('input');
	input.type = "text"; 
	input.className = "form-control";
	input.name = "product_id[]";
	input.placeholder = "Enter Product ID";
	var new_div = document.createElement('div');
	new_div.className = "form-group";
	new_div.appendChild(input);
	body.appendChild(new_div);
}