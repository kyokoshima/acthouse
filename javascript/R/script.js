document.getElementById("remove-div")
	.addEventListener("click", function(){
		var container = 
			document.getElementById("container");
		var children = container.children;
		console.log(children);
		// container.removeChild(children[2]);
		var f = container.firstChild;
		var l = container.lastChild; 
		container.removeChild(f);
	});

document.getElementById("add-div")
	.addEventListener("click", function(){
		var c = document.getElementById("container");
		var e = document.createElement("div");
		e.setAttribute("class", "child");
		e.innerHTML = c.children.length + 1;
		c.appendChild(e);
	});

var timerId = undefined;
document.getElementById("stop")
	.addEventListener("click", function(){
		clearInterval(timerId);
		timerId = undefined;
	});
document.getElementById("start")
	.addEventListener("click", function(){
		if (timerId == undefined) {
			var value = 0;
			timerId = setInterval(function(){
				var timer = 
					document.getElementById("timer-display");
				value++;
				timer.innerHTML = value;
			}, 1000);
		}
	});
document.getElementById("delay")
	.addEventListener("click", function(){
		setTimeout(function(){
			alert("3秒後にこんにちは");
		}, 3000);
	});
var i = 0;
document.getElementById("image")
	.addEventListener("click", function(){
		
		var images = 
			[
				["pilsen.jpeg", "ピルセン"],
				["redhorse.jpeg", "レッドホース"],
				["flag.jpeg", "国旗"]
			];
			i++;
			if (i >= images.length) {
				i = 0;
			}

			this.src = images[i][0];
			this.alt = images[i][1];
			

		// if (this.src.endsWith(images[0][0])) {
		// 	var redhorse = images[1];
		// 	this.src = redhorse[0];
		// 	this.alt = redhorse[1];
		// } else {
		// 	var pilsen = images[0];
		// 	this.src = pilsen[0];
		// 	this.alt = pilsen[1];
		// }
	});

document.getElementById("div2")
	.addEventListener("click", function(){
		var style = this.style;
		if (style.backgroundColor == "") {
			style.backgroundColor = "blue";
			style.borderRadius = "50px";
			style.fontSize = "30px";
			style.width = "200px";
		} else {
			style.backgroundColor = null;
			style.borderRadius = null;
			style.fontSize = null;
			style.width = null;
		}
	});

document.getElementById("div1")
	.addEventListener("mouseover", function(){
		this.style.backgroundColor = "#ff2222";

	});
document.getElementById("div1")
	.addEventListener("mouseout", function(){
		this.style.backgroundColor = "";

	});

document.getElementById("open-self")
	.addEventListener("click", function(){
		location.href = "http://www.yahoo.co.jp";
	});
document.getElementById("open-new")
	.addEventListener("click", function(){
		window.open("http://www.apple.com/ph", "_new");
	});
document.getElementById("close")
	.addEventListener("click", function(){
		window.close("other");
	});
document.getElementById("btn4")
	.addEventListener("click", function(){
		var from = document.getElementById("from").value;
		var to = document.getElementById("to").value;
		var num = +from;
		var total = 0;
		while(num <= +to) {
			total = total + num;
			num++;
		}
		alert(total);
	});

document.getElementById("btn3")
	.addEventListener("click", function(){
		var gender = new Array();
		gender[0] = "男";
		gender[1] = "女";
		gender[2] = "不明";
		console.log(gender);
		// alert(gender[0] + gender[1] + gender[2]);
		var month = ["Jan", "Feb", "Mar", "Apr", "May",
			"Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
		console.log(month);
		var index = document.getElementById("text2").value;
		// alert(month[index]);
		for(var i=0; i<month.length; i = i + 2) {
			// if (i == 4) {
			// 	continue;
			// }
			console.log(month[i]);
		}
	});

document.getElementById("btn2")
	.addEventListener("click", function(){
		var value = document.getElementById("text1").value;
		switch(value) {
			case "0":
				alert("0です");
				break;
			case "1":
				alert("1です");
				break;
			case "あ":
				alert("あです");
				break;
			default:
				alert("0でも1でもあでもないです");
				break;
		}
	});

document.getElementById("alert")
	.addEventListener('click', function(){
		alert("Hello javascript!");
	});
document.getElementById("btn1")
	.addEventListener('click', function(){
		var value = document.getElementById("text1").value;
		if (value == "1") {
			alert("1です");
		} else if (value == "2") {
			alert("2です");
		} else if (value == "あ"){
			alert("あです");
		} else {
			alert('1でも2でもあでもないです');
		}
	});
document.getElementById("confirm")
	.addEventListener('click', function(){
		var result = confirm("明日もまた見てくれるかな？");
		if (result == true) {
			alert("いいとも");
		} else {
			alert("駄目とも");
		}
	});
document.getElementById("prompt")
	.addEventListener('click', function(){
		var result = prompt("あなたのお名前を教えてください");
		alert("ようこそ " + result + " さん");
	});

var b = document.getElementById("btn");
b.addEventListener('mouseover', function(){
	var p1 = document.getElementById("par1");
	p1.innerHTML = "ラガービール";
});
b.addEventListener('mouseout', function(){
	var p1 = document.getElementById("par1");
	p1.innerHTML = "プレミアムモルツ";
});
var p1 = document.getElementById("par1");
console.log(p1.innerHTML);
p1.innerHTML = "スーパードライ";
var clz = document.getElementsByClassName("p");
console.log(clz[1].innerHTML);
var tags = document.getElementsByTagName("p");
console.log(tags[2].innerHTML);

function changeString(message, msg2) {
	var p1 = document.getElementById("par1");
	p1.innerHTML = message;
	var p2 = document.getElementById("par2");
	p2.innerHTML = msg2;
}