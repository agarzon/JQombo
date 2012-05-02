$(function (){
	//Default values
	$.get('ajax.php', {cod: 0}, function(data){$('#ciudadesCombo').html(data)}); // Carga Ciudad default

	$('#estados').change(function(){
		var cod = $('#estados').val(); //Captura COD del estado
		$.get('ajax.php', {cod: cod}, function(data){$('#ciudadesCombo').html(data)});
	});
});