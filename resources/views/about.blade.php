<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	@include("partials/_header")
	@include("partials/_style")

	<style type="text/css">
		.line-two{
			position: absolute;
			width: 20px;
			height: 50px;
			margin-left: 3%;
	    	border-top: 6px solid green;
	    			animation-name : linetwo;
		animation-duration: 2s;
		animation-iteration-count: infinite;
				animation-timing-function: ease-out;
				animation-direction: alternate;
	}

		.line{
			position: absolute;
			margin-left: 3%;
	    	border-left: 6px solid green;
	    	height: 20px;
	    			animation-name : line-move;
		animation-duration: 2s;
		animation-iteration-count: infinite;
		animation-timing-function: ease-out;
						animation-direction: alternate;
		}
		@keyframes linetwo{
						from{margin-top: 3%;}
/*			25%{margin-top: 20%;}*/
			to {margin-top: 40%;}
/*			75%{margin-top: 20%;}
			100%{margin-top: 3%;}*/

		}

		@keyframes line-move{
			from{margin-left: 3%;}
			/*25%{margin-left: 40%;}*/
			to{margin-left: 60%;}
/*			75%{margin-left: 40%;}
			100%{margin-left: 3%;}
*/
		}

		#myImg{
			border-radius: 5px;
			cursor: pointer;
			transition: .3s;
		}

		#myImg:hover{
			opacity:.7;
		}

		.modal {
			display:hidden;
			position: fixed;
			z-index: 1; /*so wwe see it on top*/
			padding-top: 100px; /* Location of the box */
		   left: 0;
		   top: 0;
		       width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}

		/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}
/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
    animation-name: zoom;
    animation-duration: 1s;
}
@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
	</style>
</head>
<body>
	@include('partials/_navigation-bar')
	<h2 align="center">Vertical Line</h2>
	<div class = "line"></div>
	<div class = "line-two"></div>

	<div class = "container" align="center" style = "margin-top: 5%">
		<img src="img/relax-chair.jpeg" id = "myImg" height = "300px" width = "400px" alt = "Mojave Desert, Bliss">

		<div src = "" id = "myModal" class = "modal">
			<span class = "close">&times</span>
			<img class = "modal-content" id = "img01">
			<div id ="caption"></div>
		</div>
	</div>

	<script type="text/javascript">

		var modal = document.getElementById('myModal');

		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");

		img.onclick = function() {
			modal.style.display = "block";
			modalImg.src = this.src;
			captionText.innerHTML = this.alt;
		}

		var span = document.getElementsByClassName("close")[0];

		span.onclick = function(){
			modal.style.display = "none";
		}
	</script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

