// CLOSE POP UP WHEN OPENING THE NEW PAGE
function handle_relocate(){
	console.log('hello world');
}

jQuery(document).ready(function($){
	//get exclusion URLs, convert to regex, convert to array
	var cplnExclusions = [];
	$('li.cpln-exclude').each(function(){
		var cplnExclude = $(this).html();

		//convert common URL features to regex-ready strings
		cplnExclude = cplnExclude.replace(/\//g,'\\/');
		//cplnExclude = cplnExclude.replace(/\:/g,'\\:');

		//tag on the exclusions to the array
		cplnExclusions.push( cplnExclude );

	});
	
	var cplnExList = '!obj.href.match(/^mailto\:/) && !obj.href.match(/^tel\:/) && !obj.href.match(/^javascript/) && (obj.hostname !== location.hostname)'
	//checks to see if any exclusions have been entered, if so, add them to the exclusion list
	if(cplnExclusions.length > 0 && cplnExclusions[0] !== '') {
		for(var i = 0; i < cplnExclusions.length; i++){
			cplnExList = cplnExList.concat(' && !obj.href.match(/' + cplnExclusions[i] + '/)');
		}
	}
	//console.log(cplnExList);
	// Creating custom :external selector
	$.expr[':'].external = function(obj){ //all links except mailto, tel, and links with hostname location
		return eval(cplnExList);
	};
	
	// Add 'external' CSS class to all external links
	$('a:external').addClass('external');
	$('.no-notice').removeClass('external'); //add class 'no-popup' on any link you want to exclude from external warning
	$('.no-notice a').removeClass('external'); //allows applying class to menu navigation
	$(document.body).on('click', 'a.external', function(e){
		if($(this).attr('href')){
			$('.cpln-redirect-link').html('<a target="_blank" class="cpln-redirect-url" href="'+$(this).attr('href')+'">'+$(this).attr('href')+'</a>');
			$('.cpln-leavenotice').addClass('cpln-active');
		}
		e.preventDefault();
	});
	
	// CLOSE POP UP WHEN OPENING THE NEW PAGE
	$(document.body).on('click', '.cpln-redirect-url', function(){
		cpln_close_notice();
	});
	
	// CANCEL BUTTON AND ESC TO CLOSE POPUP
	function cpln_close_notice(){
		$('.cpln-leavenotice').removeClass('cpln-active');
	}
	$('.cpln-cancel').click(function(e){
		cpln_close_notice();
		e.preventDefault(); 
	});
	$(document).keyup(function(e){
		if(e.keyCode === 27) {
			cpln_close_notice();
		}
	});
});