$(document).ready(function(){
	$(".tab").click(function(){
		$('.conteudo').addClass('escondido');
		var id;
		id = $(this).attr('id');
		$("."+id).removeClass('escondido');
		$(".tab").removeClass('ativo');
		$("#"+id).addClass('ativo');			
	})
})