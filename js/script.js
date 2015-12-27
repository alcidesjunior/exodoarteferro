$(document).ready(function(){
	var getUrlParameter = function getUrlParameter(sParam){
		var sPageURL = decodeURIComponent(window.location.search.substring(1)),
		sURLVariables = sPageURL.split('&'),
		sParameterName,
		i;
		for(i=0;i<sURLVariables.length;i++){
			sParameterName = sURLVariables[i].split('=');
			if(sParameterName[0]===sParam){
				return sParameterName[1] === undefined ? true : sParameterName[1];
			}
		}
	}
	if($.trim(getUrlParameter('category'))!=""){
		var category = getUrlParameter('category');
		$('.thumbnail').hide();
		$('.'+category).show();
	}else if($.trim(getUrlParameter('search'))!=""){
		var category = getUrlParameter('search');
		$('.thumbnail').hide();
		$('.'+category).show();
	}
	$('input[placeholder="Pesquisar"]').keypress(function(e){
		if(e.which==13){
			window.location="?search="+$(this).val();
		}
	});
	
});