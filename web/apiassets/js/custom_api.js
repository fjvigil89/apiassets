function metodoGet(item)
	{
		
		
		var data;
		var url='http://apisalud.upr.edu.cu'+item;
        $.getJSON(url, function (data) {        		        	                         
        	var res =JSON.stringify(data, null, 8);
            $('#browser').val(url);                        
            $("#info").html(" ");
			$("#info").append(res);	  
            
        })
	
	}
function metodoGetId(id)
	{	
		
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = "http://apisalud.lo/app_dev.php/actituds/"+id;

		// Definimos los parámetros que vamos a enviar
		//var params = "deformidades=valor&tumoraciones=otro_valor";
		
		//var params = '{"sintomasDiscHiper" : "valor", "sintomaDiscHipos" : "valor2"}';

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "GET", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send();

	}

function metodoPost()
	{	
		
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = "http://apisalud.lo/app_dev.php/segmento_gastros";

		// Definimos los parámetros que vamos a enviar
		//var params = "deformidades=valor&tumoraciones=otro_valor";
		
		var params = '{ "sintomasDiscHiper" : "valor", "sintomaDiscHipos" : "valor2"}';

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "POST", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send( params );

	}

	
	function MetodoPut(id)
	{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = "http://apisalud.lo/app_dev.php/abdomens/"+id;

		// Definimos los parámetros que vamos a enviar
		//var params = "deformidades=valor&tumoraciones=otro_valor";
		var params = '{ "deformidades" : "NuevoValue", "tumoraciones" : "value1", "alteracPielAbdomen" : "value2", "alteracoOmbligo" : "value", "diastasisMuscRectAnteriores" : "value1", "aumentoVolumen" : "value2", "disminucVolumen" : "value", "movimAnormalesResp" : "value1", "movimAnormalPeristalt" : "value2", "movimanormalvascular" : "value1", "descripMovimAnormales" : "value2"}'

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "PUT", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send( params );
		
	}

	function MetodoDelete(id)
	{
		// Definimos la URL que vamos a solicitar via Ajax
		var ajax_url = "http://apisalud.lo/app_dev.php/abdomens/"+id;

		// Creamos un nuevo objeto encargado de la comunicación
		var ajax_request = new XMLHttpRequest();

		// Definimos como queremos realizar la comunicación
		ajax_request.open( "DELETE", ajax_url, true );
		// Ponemos las cabeceras de la solicitud como si fuera un formulario, necesario si se utiliza POST
		ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		//Enviamos la solicitud junto con los parámetros
		ajax_request.send();
		
	}