$( document ).ready(function() {
	
	function loadReveal(callback){
	  callback();
	}

	loadReveal(function() {
	  alert('Reveal');
	});

	addEventListener('click',function(evt) {
	  $('.picture').fadeIn('slow').addClass('.reveal');
	    alert('Reveal');
	},false);
});



