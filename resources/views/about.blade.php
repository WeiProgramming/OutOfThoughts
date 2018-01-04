<!DOCTYPE html>
<html>
<head>
	<title>About Me</title>
	@include("partials/_header")

	<style type="text/css">
    .panels {
      height: 100vh;
      display : flex;
      margin: 0;
    }
    .panel {
      margin: 0;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      transition:
        font-size 0.7s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        flex .6s cubic-bezier(0.61,-0.19, 0.7,-0.11),
        background 0.2s;   
      font-size: 20px;   
      display: flex;
      flex:1;
      flex-direction: column;
      background-size: cover;
      background-position: center;
    }



    .panel > * {
      width: 100%;
      display: flex;
      flex:1 0 auto;
      transition: transform .8s;
      justify-content: center;
      align-items: center;
    }

    .panel h3 { 
      text-transform: uppercase;
      font-family: 'Amatic SC', cursive;
      text-shadow:0 0 4px rgba(0, 0, 0, 0.72), 0 0 14px rgba(0, 0, 0, 0.45);
      font-size: 1em;
    }

    .panel > *:first-child{
      transform: translateY(-100%);
    }
    .panel.open-active>*:first-child{
      transform: translateY(0);
    }
    .panel > *:last-child{
      transform: translateY(100%);
    }
    .panel.open-active>*:last-child{
      transform: translateY(0);
    }

    .panel.open {
      flex: 5;
      font-size: 40px;
    }

	</style>
</head>
<body>
	<div class = "panels">
    <a class = "panel home" href="#" style="background-image: url('../img/aesth-home-bg.jpg">
			<h3>Go</h3>
			<h3>Home</h3>
			<h3>Ahead</h3>
    </a>
		<div class= "panel" style="background-image: url('../img/water-bg.jpeg">
			<h3>Let's</h3>
			<h3>Create</h3>
			<h3>Something</h3>
		</div>
		<div class= "panel" style ="background-image:url('../img/fire-bg.jpeg')"">
			<h3>Let's</h3>
			<h3>Read</h3>
			<h3>Something</h3>
		</div>
		<div class= "panel" style = "background-image: url('img/air-bg.jpg')">
			<h3>Let's</h3>
			<h3>Update</h3>
			<h3>Something</h3>
		</div>
		<div class= "panel" style = "background-image:url('img/earth-bg.jpg')"">
			<h3>Let's</h3>
			<h3>Destroy</h3>
			<h3>Something</h3>
		</div>
	</div>

	<script type="text/javascript">
		var panels = document.querySelectorAll('.panel');
		function toggleOpen(){
      console.log("Hey");
			 this.classList.toggle('open');
		}

		function toggleActive(e){
			console.log(e.propertyName);
			if(e.propertyName.includes('flex')){
				this.classList.toggle('open-active');
			}
      if(this.classList.contains('home')){
        setTimeout(function(){
          window.location.replace('{{route('welcome')}}');
        },1000);
      }
		}


		panels.forEach(panel => panel.addEventListener('click',toggleOpen));
		panels.forEach(panel => panel.addEventListener('transitionend',toggleActive));
	</script>
</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

