var global_place=0;
var animals=[{"id": "outline_dog", "image": "img/odog.png"},
          	 {"id": "picture_dog", "image": "img/pdog.png"}];

function loadReveal(callback){
  callback();
}

loadReveal(function() {
   // alert('Reveal');
});

addEventListener('click',function(evt) {
	 document.getElementById('before').src = animals[global_place].image;
	 global_place = (global_place + 1) % animals.length;
	 console.log(global_place);
    // alert('Hello world');
},false);




