  var global_place=0;
  var pics=[{"id": "outline_dog", "image": "img/1o.png"},
        	  {"id": "picture_dog", "image": "img/1n.png"},
        	  {"id": "picture_dog", "image": "img/2o.png"},
        	  {"id": "picture_dog", "image": "img/2n.png"},
        	  {"id": "picture_dog", "image": "img/3o.png"},
        	  {"id": "picture_dog", "image": "img/3n.png"},
        	  {"id": "picture_dog", "image": "img/4o.png"},
        	  {"id": "picture_dog", "image": "img/4n.png"},
        	  {"id": "picture_dog", "image": "img/5o.png"},
        	  {"id": "picture_dog", "image": "img/5n.png"}];

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


  //images from http://www.telegraph.co.uk/travel/picturegalleries/9252196/Queens-Diamond-Jubilee-London-then-and-now.html
