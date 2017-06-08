$(function (){

	var counter = 4;
	$('#btn').on('click', function (){
		counter = counter + 4;
		$('#result').load('user.php', {
			counterNew: counter
		})
	});


	$('#search').keyup(function(){
		var search = $('#search').val();

		$.post('./includes/search.inc.php', {

			newSearch: search
		}, function(data){

			$('#results').html(data);
		});
	})
})