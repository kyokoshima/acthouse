// この上は何も書かない
jQuery(function($){
	var memory = "";
	$("#calc").on("click", ".num", function(){
		var num = $(this).text();
		var current = $(".result").text();
		var newVal;
		if (current == "0") {
			newVal = num;
		} else if (
			memory.length == 0 ||
			memory.match(/[\+\-\*\/\%]$/)){
			newVal = num;
		} else {
			newVal = current + num;
		}
		$(".result").text(newVal);
		memory = memory + num;
	}).on("click", ".clear", function(){
		$(".result").text(0);
		memory = "";
	}).on("click", ".ope", function(){
		var ope = $(this).text();
		if (memory.length == 0) {
			memory = $(".result").text() + ope;
		} else {
			memory = memory + ope;
		}
	}).on("click", ".eq", function(){
		$(".result").text(eval(memory));
		memory = "";
	})
	.on("click", ".button", function(){
		console.log(memory);
	});
}); 
// この下は何も書かない