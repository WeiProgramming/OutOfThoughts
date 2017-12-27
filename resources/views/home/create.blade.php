<DOCTYPE html>
<html>
<head>
	@include("partials/_header")

	@include("partials/_style")
	<style type="text/css">
		body {
			background-image: url('../img/architecture-bg.jpg');
			background-size: cover;
			background-position: center;
		}
		.comment-form {
			top: 50%;
			text-align: center;
		}
		.cmt-form button  {
			margin-top: 2%;
		}
	</style>
</head>

<body style="background-image: url('../img/architecture-bg.jpg');
			background-size: cover;
			background-position: center;">
	@include("partials/_navigation-bar")

	<div class = "comment-form">
		<div class = "cmt-form container">
			<h1>We Create, We Are Human</h1>
           <div class="form-group" id="textarea-form">
                <form action="{!!route('home.store')!!}" method="POST">
                    {{ csrf_field() }}

                    <label for="name">Name: </label>
                    <input type="text" name="name" style="color: black; margin-bottom: 2%;">

                    <label for="info"> </label>
                    <div>
                        <textarea name="info" id="info" cols="70" rows="10" style="color: black;" placeholder="Enter your Message"></textarea>
                    </div>

                    <button class="btn btn-default">Post A Thought</button>
                </form>
            </div>
		</div>
	</div>
</body>
</html>