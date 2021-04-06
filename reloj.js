(function(){
	var actualizarHora = function(){
		// Obtenemos la fecha actual, incluyendo las horas, minutos, segundos, dia de la semana, dia del mes, mes y año;
		
		var fecha = new Date();
	
	   // hora , minutos y segundos 
		var hora = (parseInt(fecha.getHours())) < 10 ?  "0" + fecha.getHours()  : fecha.getHours();
		var minutos = (parseInt(fecha.getMinutes())) < 10 ?  "0" + fecha.getMinutes()  : fecha.getMinutes();
		var segundos =  (parseInt(fecha.getSeconds())) < 10 ?  "0" + fecha.getSeconds()  : fecha.getSeconds();

		var Tiempo = hora + ' : ' + minutos + ' : ' + segundos;
		var pTemporal = document.getElementById('horas');
		var pAMPM = document.getElementById('ampm');
		
		pTemporal.textContent = Tiempo;
		if (parseInt(fecha.getHours()) > 12 && parseInt(fecha.getHours()) < 24) 
		{
			pAMPM.textContent = 'PM';
		} else {
			pAMPM.textContent = 'AM';
		}

		// fecha 

		pDiaSemana = document.getElementById('diaSemana');
		pDia = document.getElementById('dia');
		pMes = document.getElementById('mes');
		pYear = document.getElementById('year');
		
		diaSemana = fecha.getDay();
		dia = fecha.getDate();
		mes = fecha.getMonth();
		year = fecha.getFullYear();

		var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
		pDiaSemana.textContent = semana[diaSemana];

		pDia.textContent = dia;

		var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
		pMes.textContent = meses[mes];
		pYear.textContent = year;
		
	};

	actualizarHora();
	var intervalo = setInterval(actualizarHora, 1000);
}())
