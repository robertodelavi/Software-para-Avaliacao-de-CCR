function show(){
	var value = document.getElementById("select").value;
	if (value == 1){	
		document.getElementById('multiple_choice').style.display = "none"; 
		document.getElementById('select_box').style.display = "none"; 
	}else if (value == 2){
		document.getElementById('multiple_choice').style.display = "block";
		document.getElementById('select_box').style.display = "none"; 
	}else if (value == 3){
		document.getElementById('multiple_choice').style.display = "none"; 
		document.getElementById('select_box').style.display = "block"; 
	}	
}

function add_form(){
    document.getElementById('question').innerHTML = document.getElementById('question').innerHTML+document.getElementById('question').innerHTML;
}

function add_disc(){
	var a = document.getElementById('form_disc_prof');
	var b = document.getElementById('select_prof_disc')
	a.innerHTML = a.innerHTML + b.innerHTML;
}

function add_disc_prof(){
	document.getElementById('button-right').style.display = "none";
	document.getElementById('dp').style.display = "block";
}