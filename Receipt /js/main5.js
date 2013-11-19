  var global_place=0;
  var pics=[{"id": "outline_dog", "image": "img/b3.jpg"},
            {"id": "picture_dog", "image": "img/b4.jpg"},
            {"id": "picture_dog", "image": "img/b1.jpg"},
            {"id": "picture_dog", "image": "img/b2.jpg"}];

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


