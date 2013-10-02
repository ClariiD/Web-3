var orange_color = document.getElementById("jsbutton");
console.log(orange_color);


var wrap = document.querySelector("#orange");
console.log(wrap);

for(var i=0;i<orange_color.length;i++) {
	var change_color = wrap.item(i);
	change_color.addEventListener('click',function(evt) {
		evt.preventDefault();
		evt.stopPropagation();
		this.classList.toggle("is-active");
	});
}
