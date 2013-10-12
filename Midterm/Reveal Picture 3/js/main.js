// document.querySelector(".outline").addEventListener("click", function(){
//     document.querySelector(".picture").style.display = "block";
//     document.querySelector(".picture").style.opacity = "1s";
// });

// var fade_in_element = document.getElementById('.picture'),
// 	fade_out_element = document.getElementById('.outline');


// querySelector.('.picture').addEventListener('click', function() {
//     alert('Hello world');
// }, false);

// function reveal{
// 	document.getElementById('.picture').addclass('.fade-in', false);
// }

// reveal();


$(document).ready(function(){
    var animals=[{id: "outline_dog", image: "odog.png", layer: 1, fade: "fade_out"},
              {id: "picture_dog", image: "pdog.png", layer: 2, fade: "fade_in"}, 
              {id: "outline_zebra", image: "ozebra.png", layer: 1, fade: "fade_out"},
              {id: "picture-zebra", image: "pzebra.png", layer: 2, fade: "fade_in"},
              {id: "outline_lion", image: "olion.png", layer: 1, fade: "fade-out"}, 
              {id: "picture-lion", image: "plion.png", layer: 2, fade: "fade-in"},
              {id: "outline-elephant", image: "oelephant.png", layer: 1, fade: "fade-out"},
              {id: "picture-elephant", image: "pelephant.png", layer: 2, fade: "fade-in"},
              {id: "outline-owl", image: "oowl.png", layer: 1, fade: "fade-out"},
              {id: "picture-owl", image: "powl.png", layer: 2, fade: "fade-in"},
              {id: "outline-pig", image: "opig.png", layer: 1, fade: "fade-out"},
              {id: "picture-pig", image: "ppig.png", layer: 2, fade: "fade-in"}, 
              {id: "outline-sheep", image: "osheep.png", layer: 1, fade: "fade-out"},
              {id: "picture_sheep", image: "psheep.png", layer: 2, fade: "fade-in"},];

var $fade_in_element = $('.picture'),
    $fade_out_element = $('.outline');


$('.outline').click(function(){
	function Reveal(){
	    $('.picture').fadeIn('slow').addClass('.reveal');
	};
});
