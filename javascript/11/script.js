var arr = {"a": "apple", "b": "banana", "c": "cherry"};

document.getElementById("btn15").addEventListener("click", function(){
	clearInterval(timerId);
});
var direction = "right";
document.getElementById("btn14").addEventListener("click", function(){
	timerId = setInterval(function(){
		var d = document.getElementById("div4");
		var marginLeft = parseInt(d.style.marginLeft) || 0;

		if (marginLeft > document.body.offsetWidth - 50) {
			direction = "left";
		} else if (marginLeft <= 0) {
			direction = "right";
		}


		if (direction == "right") {
			marginLeft = marginLeft + 1;
		} else {
			marginLeft = marginLeft - 1;
		}
		
		d.style.marginLeft = marginLeft + "px";
	}, 1);
});

var timerId;
document.getElementById("btn13").addEventListener("click", function(){
	clearInterval(timerId);
});


document.getElementById("btn12").addEventListener("click", function(){
	timerId = setInterval(function(){
		document.getElementById("p3").innerText = new Date();
	}, 1000);
});

document.getElementById("btn11").addEventListener("click", function(){
	setTimeout(showPicture, 3000);
});

function showPicture() {
	document.getElementById("img2").style.display = "block";
}

document.getElementById("btn10").addEventListener("click", function(){
	// var num = 1;
	// var total = 0;
	// while(num <= 10){
	// 	total = total + num;
	// 	num++;
	// }
	// console.log(total);
	var total = 0;
	for(var i=1; i<=10; i++) {
		total = total + 1;
	}
});

document.getElementById("btn9").addEventListener("click", function(){
	var gender = new Array();
	gender[0] = "男";
	gender[1] = "女";
	gender[2] = "不明";
	console.log(gender);

	var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
	console.log(months[4]);

	for (var i=0; i<months.length; i++) {
		if (i == 5) {
			continue;
		}
		console.log(months[i]);
	}
});

document.getElementById("btn8").addEventListener("click", function(){
	var val = document.getElementById("num1").value;
	switch(val) {
		case "0":
			alert("0です");
			break;
		case "1":
			alert("1です");
			break;
		case "2":
			alert("2です");
			break;
		case "3":
			alert("3です");
			break;
		case "4":
			alert("4です");
			break;
		default:
			alert("0-4以外です");
	}
});


document.getElementById("btn5").addEventListener("click", function(){
	alert("アラート表示");
});

document.getElementById("btn6").addEventListener("click", function(){
	if (confirm("あなたは神を信じますか？")) {
		alert("そうですか");
	} else {
		alert("駄目です");
	}
});

document.getElementById("btn7").addEventListener("click", function(){
	var name = prompt("あなたは誰ですか？");
	alert("ようこそ" + name + "さん！");
});



document.getElementById("div3").addEventListener("mouseover", function(){
	document.getElementById("img1").style.display = "block";
});

document.getElementById("div3").addEventListener("mouseout", function(){
	document.getElementById("img1").style.display = "none";
});


document.getElementById("btn4").addEventListener("click", function(){
	var img = document.getElementById("img1");
	if (img.style.display == "none") {
		img.style.display = "block";
	} else {
		img.style.display = "none";
	}
});

document.getElementById("btn2").addEventListener("click", function(){
	document.getElementById("div2").innerText = "おばあちゃん";
});



function showString(){
	document.getElementById("p1").innerText = "サンプル";
}

function getClass(msg) {
	var class1 = document.getElementsByClassName("class1");
	class1[0].innerText = msg;
	class1[1].innerText = "いいいいいいいい";
	class1[2].innerText = "ううううううううう";

	console.log(class1);
}

// alert("Hello world!");
function doWrite() {
	// document.write("あああああああ");
	var div1 = document.getElementById("div1");
	div1.innerText = "ああああああああ";
}

