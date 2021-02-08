function mostraHora(){

	var hora = document.getElementById('hora');
	var data = document.getElementById('data')
	var dias = new Array('Domingo','Segunda-Feira','Terça-Feira', 'Quarta-Feira','Quinta-Feira', 'Sexta-Feira','Sabado');
	var dataCompleta =  new Date();
	var dia = dataCompleta.getDate();
	var mes = dataCompleta.getMonth();
	var ano = dataCompleta.getFullYear();
	var diaSemana = dias[dataCompleta.getDay()];

	var dataAtual = diaSemana + ' - ' + dia + '/' + mes + '/' + ano;

	data.innerHTML = dataAtual;
	setInterval(function () {hora.innerHTML = ((new Date).toLocaleString().substr(11,8));},1000);

}