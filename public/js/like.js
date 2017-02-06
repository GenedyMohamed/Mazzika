/**
* This javascript adds or remove a like from a song
*/
function change_state()
{

		/*if($('#true').length == 0)
	    {	
	    	$('#true').css('color', 'black');
	    	$('#true').attr('id','false');
	    }
		else
		{
			$('#false').attr('id','true');

		}*/
		$('#thumb').css('color', 'blue');

}
$(document).ready(function(){
	$('.fa').click(function(){
		var id = $("input[name='music_id']").val();
	
	
		var token =  $('meta[name="csrf-token"]').attr('content');

		$.ajax({
  			type: "GET",
  			url: "/like",
  			data: { 'token': token, 'id': id },
  			success: change_state(),
		});

	});

});


