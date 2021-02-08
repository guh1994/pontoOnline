function mostraHora(){

	var hora = document.getElementById('hora');
	
	setInterval(function () {hora.innerHTML = ((new Date).toLocaleString().substr(11,8));},1000);

}