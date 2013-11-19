  var global_place=0;
  var pics=[{"id": "outline_dog", "image": "img/1o.jpg"},
        	  {"id": "picture_dog", "image": "img/1n.jpg"},
        	  {"id": "picture_dog", "image": "img/2o.jpg"},
        	  {"id": "picture_dog", "image": "img/2n.jpg"},
        	  {"id": "picture_dog", "image": "img/3o.jpg"},
        	  {"id": "picture_dog", "image": "img/3n.jpg"}];

  function loadReveal(callback){
    callback();
  }

  loadReveal(function() {
     // alert('Reveal');
  });

  addEventListener('click',function(evt) {
     document.getElementById('before').src = pics[global_place].image;
     global_place = (global_place + 1) % pics.length;
     console.log(global_place);
  },false);


