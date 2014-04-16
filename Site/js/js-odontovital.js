function disable(){
	var decision = confirm("Tem certeza que quer desativar sua conta?");
	return decision;
}

function test(){
	var valuea = false;
	var valueb = false;
	var valuec = false;
	var valued = false;
	var valuee = false;
	var valuef = false;
	var valueg = false;
	var valueh = false;
	var valuej = false;
	var valuek = false;
	var valuel = false;
	var valuem = false;
	var valuen = false;
	var valueo = false;
	var valuep = false;
	var a = window.document.getElementById('message_error1');
	var b = window.document.getElementById('message_error2');
	var c = window.document.getElementById('message_error3');
	var d = window.document.getElementById('message_error4');
	var e = window.document.getElementById('message_error5');
	var f = window.document.getElementById('message_error6');
	var g = window.document.getElementById('message_error7');
	var h = window.document.getElementById('message_error8');
	var j = window.document.getElementById('message_error10');
	var k = window.document.getElementById('message_error11');
	var l = window.document.getElementById('message_error12');
	var m = window.document.getElementById('message_error13');
	var n = window.document.getElementById('message_error14');
	var o = window.document.getElementById('message_error15');
	var p = window.document.getElementById('message_error16');
	
	if ($('input[name="name"]').val() == ""){
		valuea = false;
		a.style.display = "block";
	}else{
		valuea = true;
		a.style.display = "none";
	}
	if ($('input[name="last_name"]').val() == ""){
		valueb = false;
		b.style.display = "block";
	}else{
		valueb = true;
		b.style.display = "none";
	}
	if ($('input[name="email"]').val() == ""){
		valuec = false;
		c.style.display = "block";
	}else{
		valuec = true;
		c.style.display = "none";
	}
	if ($('input[name="phone"]').val() == ""){
		valued = false;
		d.style.display = "block";
	}else{
		valued = true;
		d.style.display = "none";
	}
	if ($('input[name="birth_date"]').val() == ""){
		valuee = false;
		e.style.display = "block";
	}else{
		valuee = true;
		e.style.display = "none";
	}
	if ($('input[name="rg"]').val() == ""){
		valuef = false;
		f.style.display = "block";
	}else{
		valuef = true;
		f.style.display = "none";
	}
	if ($('input[name="cpf"]').val() == ""){
		valueg = false;
		g.style.display = "block";
	}else{
		valueg = true;
		g.style.display = "none";
	}
	if ($('input[name="blood_type"]').val() == ""){
		valueh = false;
		h.style.display = "block";
	}else{
		valueh = true;
		h.style.display = "none";
	}
	if ($('input[name="city"]').val() == ""){
		valuej = false;
		j.style.display = "block";
	}else{
		valuej = true;
		j.style.display = "none";
	}
	if ($('input[name="cep"]').val() == ""){
		valuek = false;
		k.style.display = "block";
	}else{
		valuek = true;
		k.style.display = "none";
	}
	if ($('input[name="neighborhood"]').val() == ""){
		valuel = false;
		l.style.display = "block";
	}else{
		valuel = true;
		l.style.display = "none";
	}
	if ($('input[name="address"]').val() == ""){
		valuem = false;
		m.style.display = "block";
	}else{
		valuem = true;
		m.style.display = "none";
	}
	if ($('input[name="username"]').val() == ""){
		valuen = false;
		n.style.display = "block";
	}else{
		valuen = true;
		n.style.display = "none";
	}
	if ($('input[name="password"]').val() == ""){
		valueo = false;
		o.style.display = "block";
	}else{
		valueo = true;
		o.style.display = "none";
	}
	if (document.getElementById("female").checked == false && document.getElementById('male').checked == false){
		valuep = false;
		p.style.display = "block";
	}else{
		valuep = true;
		p.style.display = "none";
	}
		
	if (valuea && valueb && valuec && valued && valuee && valuef && valueg && valueh && valuej && valuek && valuel && valuem && valuen && valueo && valuep){
		return true;
	}
	
	return false;
}

function test_register(){
	var valuea = false;
	var valueb = false;
	var valuec = false;
	var valued = false;
	var valuee = false;
	var valuef = false;
	var valueh = false;
	var valuei = false;
	var valuej = false;
	var valuek = false;
	var valuel = false;
	var valuem = false;
	var a = window.document.getElementById('error1');
	var b = window.document.getElementById('error2');
	var c = window.document.getElementById('error3');
	var d = window.document.getElementById('error4');
	var e = window.document.getElementById('error5');
	var f = window.document.getElementById('error6');
	var h = window.document.getElementById('error8');
	var i = window.document.getElementById('error9');
	var j = window.document.getElementById('error10');
	var k = window.document.getElementById('error11');
	var l = window.document.getElementById('error12');
	var m = window.document.getElementById('error13');
	if ($('input[name="name"]').val() == ""){
		valuea = false;
		a.style.display = "block";
	}else{
		valuea = true;
		a.style.display = "none";
	}
	if ($('input[name="last_name"]').val() == ""){
		valueb = false;
		b.style.display = "block";
	}else{
		valueb = true;
		b.style.display = "none";
	}
	if ($('input[name="email"]').val() == ""){
		valuec = false;
		c.style.display = "block";
	}else{
		valuec = true;
		c.style.display = "none";
	}
	if ($('input[name="phone"]').val() == ""){
		valued = false;
		d.style.display = "block";
	}else{
		valued = true;
		d.style.display = "none";
	}
	if ($('input[name="rg"]').val() == ""){
		valuee = false;
		e.style.display = "block";
	}else{
		valuee = true;
		e.style.display = "none";
	}
	if ($('input[name="cpf"]').val() == ""){
		valuef = false;
		f.style.display = "block";
	}else{
		valuef = true;
		f.style.display = "none";
	}
	if ($('input[name="city"]').val() == ""){
		valueh = false;
		h.style.display = "block";
	}else{
		valueh = true;
		h.style.display = "none";
	}
	if ($('input[name="cep"]').val() == ""){
		valuei = false;
		i.style.display = "block";
	}else{
		valuei = true;
		i.style.display = "none";
	}
	if ($('input[name="neighborhood"]').val() == ""){
		valuej = false;
		j.style.display = "block";
	}else{
		valuej = true;
		j.style.display = "none";
	}
	if ($('input[name="address"]').val() == ""){
		valuek = false;
		k.style.display = "block";
	}else{
		valuek = true;
		k.style.display = "none";
	}
	if ($('input[name="formation"]').val() == ""){
		valuel = false;
		l.style.display = "block";
	}else{
		valuel = true;
		l.style.display = "none";
	}
	if ($('input[name="speciality"]').val() == ""){
		valuem = false;
		m.style.display = "block";
	}else{
		valuem = true;
		m.style.display = "none";
	}
	
	if (valuea && valueb && valuec && valued && valuee && valuef && valueh && valuei && valuej && valuek && valuel && valuem){
		return true;
	}
	
	return false;
}

function test_treatment(){
	valuea = false;
	valueb = false;
	var a = window.document.getElementById('error1');
	var b = window.document.getElementById('error2');
	if ($('input[name="name"]').val() == ""){
		valuea = false;
		a.style.display = "block";
	}else{
		valuea = true;
		a.style.display = "none";
	}
	if ($('input[name="cost"]').val() == ""){
		valueb = false;
		b.style.display = "block";
	}else{
		valueb = true;
		b.style.display = "none";
	}
	if (valuea && valueb){
		return true;
	}
	
	return false;
}

function test_relate(){
	valuea = false;
	valueb = false;
	var a = window.document.getElementById('error1');
	var b = window.document.getElementById('error2');
	if ($('input[name="patient"]').val() == ""){
		valuea = false;
		a.style.display = "block";
	}else{
		valuea = true;
		a.style.display = "none";
	}
	if ($('input[name="treatment"]').val() == ""){
		valueb = false;
		b.style.display = "block";
	}else{
		valueb = true;
		b.style.display = "none";
	}
	if (valuea && valueb){
		return true;
	}
	
	return false;
}
