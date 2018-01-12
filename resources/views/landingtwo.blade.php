<!DOCTYPE html>
<html>
	<head>
		<title>Guess The Color!</title>
		@include('partials/_header')
		<style type="text/css">
			body {
				background-color: #232323;
				margin: 0;
				font-family: "Montserrat","Avenir";
			}

			.square {
				width: 30%;
				background: purple;
				padding-bottom: 30%;
				float:left;
				margin: 1.6%;
				border-radius: 50%;
				transition: background .3s;
/*				for broswer support Safari and Moz
*/				-webkit-transition:background .3s;
				-moz-transition:background .3s;
			}

			#container {
				max-width: 600px;
				margin: 20px auto;
			}

			h1 {
				color: white;
				text-align: center;
				font-weight: normal;
				background:steelblue;
				margin: 0;
				text-transform: uppercase;
				line-height: 1.1;
				padding:20px 0;
			}

			#stripe {
				background-color: white;
				height:30px;
				text-align: center;
				color:black;
			}

			#colorDisplay {
				font-size: 200%;
			}

			.selected {
				background:steelblue;
				color:white;
			}

			#message {
				display: inline-block;
				width: 20%;
			}

			button {
				height: 100%;
				border: none;
				background: none;
				text-transform: uppercase;
				font-weight: 700;
				color: steelblue;
				letter-spacing: 1px;
				font-size: inherit;
				transition:all .4s;
				-webkit-transition:background .3s;
				-moz-transition:background .3s;
				outline: none;
			}

			button:hover {
				color: white;
				background-color: steelblue;
			}
		</style>
	</head>
	<body>
		<h1>The Great 
			<br>
			<span id = "colorDisplay">RGB</span> 
			<br>
		Color Game</h1>
		<div id = "stripe">
			<button id = "reset">New Game</button>
			<span id = "message"></span>
			<button class = "mode">Easy</button>
			<button class = "mode selected">Hard</button>
		</div>

		<div id ="container">
			<div class = "square"></div>
			<div class = "square"></div>
			<div class = "square"></div>
			<div class = "square"></div>
			<div class = "square"></div>
			<div class = "square"></div>
		</div>

		<script type="text/javascript">
			var numOfSquares = 6;
			var colors = generateRandomColors(numOfSquares);

			var squares = document.querySelectorAll('.square');
			var colorDisplay = document.getElementById('colorDisplay');
			var messageDisplay = document.querySelector('#message');
			var h1 = document.querySelector('h1');
			var resetBtn = document.querySelector('#reset');
			var easyBtn = document.querySelector('#easyBtn');
			var hardBtn = document.querySelector('#hardBtn');
			var modeBtn = document.querySelectorAll(".mode");
			var pickedColor = pickColor();

			// for(var i = 0; i < modeBtn.length; i++){
			// 	modeBtn.addEventListener('click', function(){
			// 		//remove both class from both buttons just in case
			// 		modeBtn[0].classList.remove("selected");
			// 		modeBtn[1].classList.remove('selected');
			// 		this.classList.add("selected");


			// 	});
			// }

			easyBtn.addEventListener('click', function(){
				numOfSquares = 3;
				easyBtn.classList.add("selected");
				hardBtn.classList.remove('selected');
				colors  = generateRandomColors(numOfSquares);
				//pickedColor will be the index of colors chosen at random
				pickedColor = pickColor();
				colorDisplay.textContent = pickedColor;

				for(var i = 0; i < squares.length; i++){
					if(colors[i]){	//if there is a next color
						squares[i].style.backgroundColor = colors[i];
					}
					else {
						squares[i].style.display = "none";
					}
				}
			});

			hardBtn.addEventListener('click', function(){
				hardBtn.classList.add('selected');
				easyBtn.classList.remove('selected');
				numOfSquares = 6;
				colors  = generateRandomColors(numOfSquares);
				pickedColor = pickColor();
				colorDisplay.textContent = pickedColor;

				for(var i = 0; i < squares.length; i++){
					if(colors[i]){	//if there is a next color
						squares[i].style.backgroundColor = colors[i];
						squares[i].style.display = "block";
					}
				}
			});

			resetBtn.addEventListener('click',function(){
				//reset bg color
				h1.style.backgroundColor = 'steelblue';

				// generate all new colors
				colors = generateRandomColors(6);

				//pick a new random color in arr
				pickedColor = pickColor();

				//change the text
				colorDisplay.textContent = pickedColor;

				this.textContent = "New Game"

				messageDisplay.textContent = "";

				for(var i = 0; squares.length; i++){
					squares[i].style.backgroundColor = colors[i];
				}
			});

			colorDisplay.textContent = pickedColor;

			for(var i = 0; i < squares.length; i++){
				//add init colors to the squares
				squares[i].style.backgroundColor = colors[i];
				//add a listener to all the squares
				squares[i].addEventListener('click', function(){
					//grab color of clicked square
					var clickedColor = this.style.backgroundColor;
					if(clickedColor === pickedColor){
						messageDisplay.textContent = "Correct!";
						changeColors(pickedColor);
						h1.style.backgroundColor = pickedColor;
						resetBtn.textContent = "Play Again";
					}
					else{
						this.style.backgroundColor = "#232323";
						messageDisplay.textContent = "Try Again";
					}
				});
			}

			function generateRandomColors(num){
				//make an array 
				var arr = [];
				//add random nums to array
				for(var i = 0 ; i < num ; i++){
					//get random color and push to array
					arr.push(randomColor());
				}

				return arr;
			}

			function randomColor(){
				//pick a red
				var r = Math.floor(Math.random()*256);

				//pick a green
				var g = Math.floor(Math.random()*256);

				//pick a blue
				var b = Math.floor(Math.random()*256);

				return "rgb(" + r + ", "+ g + ", " + b+ ")";

			}

			function changeColors(color){
				//loop through all squares and change each color to match given color
				for(var i = 0; i < squares.length; i++){
					squares[i].style.backgroundColor = color;
				}
			}
			function pickColor(){
				//math 0 - 1 then we multiple it by 6 and get the floor of it
				var random = Math.floor(Math.random() * colors.length);
				return colors[random];
			}
		</script>
	</body>
</html>