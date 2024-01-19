<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	html {
		border: 0;
		margin: 0;
		padding: 0;
		background-color: #333;
	}

	input {
		background-color: #333;
		color: aliceblue;
		padding: 10px;
		border-radius: 5px;
		width: 80%;
	}

	.ct {
		background-color: #666;
		color: aliceblue;
		padding: 10px;
		border-radius: 5px;
		margin-left: 20%;
		width: 60%;
		align-items: center;
		text-align: center;
		margin-top: 100px;
	}

	h1 {
		color: yellow;
		font-size: small;
	}
</style>

<body>

	<div class="ct">
		<h1>Hash Generator</h1>
		<input type="text" name="" id="im" oninput="bla()">
		<h1 id="aaa"></h1>
	</div>

</body>
<script>


	function bla() {
		var im = document.getElementById('im').value;
		document.getElementById('aaa').innerHTML = 'hex: ' + joaat(im) + '<br>int32: ' + joaat2(im) + '<br>uint32: ' + joaat3(im);

	}


	function joaat(s) {
		let h = 0;
		for (let i = 0; i < s.length; i++) {
			h += s.charCodeAt(i);
			h += (h << 10);
			h ^= (h >> 6);
		}
		h += (h << 3);
		h ^= (h >> 11);
		h += (h << 15);
		h = h >>> 0
		return '0x' + h.toString(16).toUpperCase();
	}

	function joaat2(s) {
		let h = 0;
		for (let i = 0; i < s.length; i++) {
			h += s.charCodeAt(i);
			h += (h << 10);
			h ^= (h >> 6);
		}
		h += (h << 3);
		h ^= (h >> 11);
		h += (h << 15);
		//h = h >>> 0
		return h;
	}
	function joaat3(s) {
		let h = 0;
		for (let i = 0; i < s.length; i++) {
			h += s.charCodeAt(i);
			h += (h << 10);
			h ^= (h >> 6);
		}
		h += (h << 3);
		h ^= (h >> 11);
		h += (h << 15);
		h = h >>> 0
		return h;
	}



</script>

</html>