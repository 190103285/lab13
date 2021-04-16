<!DOCTYPE html>
<html>
<head>
	<title>Bake&Shake</title>
	<link href="{{ asset('/css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&family=Poiret+One&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body style = "margin:0px">

	<div class = "logo">
		<img id="logotype" src="{{ asset('/img/bake&shakeResized.png')}}" style="width: 300px" onclick = "window.location.reload()">

		<div class = "loginSuggestion">
		    <p id = "suggestion">log in for your convenience</p>
		    <a  id = "myButton" href="#" class="myButton" onclick="popUp()" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">log in</a>
	    </div>

	    <div class = "user_prof">
	    	<p id = "user_email" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"></p>
	    </div>
	</div>

	<div class = "nav">
		<label for="toggle">&#9776</label>
	</div>

	<div class = "popUp">			

		<div class = "popUpFilling">
			<img id="exit" src="https://static.thenounproject.com/png/79122-200.png" width = "7%" onclick="close_popUp()" class = "closed">

		    <p id = "accountLogin">account login</p>
		    <p id = "usernameRequest">username</p>
		    <input id="email" type="email" name="email" placeholder="your email">

		    <p id = "passwordRequest">password</p>
		    <input id="password" type="password" name="password" placeholder="your password">
		    <br>

		    <a id = "finLoggingIn" href="#" class="finLoggingIn" onclick="login(email.value)" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">log in</a>
		</div>

	</div>
    
	<hr id = "hr1">
	
	<input type="checkbox" name="" id = "toggle">
	<div class = "header">
		<div id = "home" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick="window.location.reload()">home</div>
		<div id = "catalogue" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >catalogue</div>
		<div id = "ordering" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >ordering</div>
		<div id = "contacts" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >contacts</div>
	</div>

	<hr id = "hr2">
    
    <p id = "titleName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Email is sent</p>

	    <br>

	    <p class = "divider">
	    	<img id = "whisk" src = "{{ asset('/img/divider.jpg')}}">
	    </p>

		

	<button onclick="topFunction()" id="myBtn">↑</button>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap"></script>

	<script type="text/javascript" src="{{ asset('/js/script.js')}}"></script>

	

</body>
</html>
