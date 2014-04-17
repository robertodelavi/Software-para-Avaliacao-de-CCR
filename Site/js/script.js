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