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
    
    <p id = "titleName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Welcome, foodlover!☼</p>

	<div class = "main">
		<table class = "row1">
			<tr>
				<td class = "left">
		            <img id="mainPic" src = "http://static2.vigbo.com/u23942/29408/blog/2315966/1612088/preview/1000-vicky_bakery-1d4aeaf6b03b0b6175ba5206b2a7c77b.jpg"  onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
		        </td>

		        <td class = "right">
		   
		            <img id="rightSided" src="http://static2.vigbo.com/u23942/29408/blog/2315966/638876/7579223/500-90d5ba9e751ac32c4658b1878c3b0ff7.jpg" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">

		            
		            <h3 id = "title2" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">What's Bake&Shake about?</h3>
		            <p id="article">Bake&Shake is a coffee house in Boise,ID with wonderful cakes you need to taste. <span class = "hidden">Вue to quarantine, we also bake custom-made cakes. Check the list of our desserts in "catalogue" page and leave a request in google forms. </span></p>
		        </td>
		    </tr>
		</table>



		<div class = "contactInfo"> 
			<div class = "socialMedia">    
			    <div id = "icons">
			    	<div class = "circle">
			    		<a href = "https://web.whatsapp.com/" class = "smLinks">
			    		    <img id="smIcon" src="{{ asset('/img/phone.png')}}" title = "WhatsApp call" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">
			    		</a>	
			    	</div>    
			    	<div class = "circle"><a href = "https://gmail.com/" class = "smLinks">
			    		<img id="smIcon" src="{{ asset('/img/email.png')}}" title = "Gmail" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"></a></div>
			    	<div class = "circle"><a href = "https://www.instagram.com/vicky_bakery/?hl=ru" class = "smLinks">
			    		<img id="smIcon" src="{{ asset('/img/instagram.png')}}" title = "Instagram page" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"></a></div>
			    	<div class = "circle"><a href = "https://www.facebook.com/vickybakery/" class = "smLinks">
			    		<img id="smIcon" src="{{ asset('/img/facebook.png')}}" title = "Facebook page" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"></a></div>
			    </div>
		    </div>

			<div id = "location">  
			    <div class = "maps">
			    	<div id = "map"></div>
			    </div>
			    <div class = "invitation">
			    	<h3 class = "mapTitle">How to get to our cafe?</h3>
			    	<p class = "address">611 S 8th St UNIT 103, Boise, USA</p>
			    	<p class = "address">Right near the Boise River, beside the Biose Art Museum</p>
			    	<br>
			    	
			    	<h3 class = "mapTitle">Opening Hours</h3>
			    	<p class = "address">Monday - Sunday : 9am - 8pm</p>
			    	
			    </div>
			</div>
		</div>
	</div>

	    <br>

	    <p class = "divider">
	    	<img id = "whisk" src = "{{ asset('/img/divider.jpg')}}">
	    </p>

	    <div class = "row2">

	    	<div class = "titles">
	    	    <h2 id = "mainTitle"onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Client feedback</h2>
	    	    <p id = "secondTitle"onmouseover = "coloring(this)" onmouseout="coloringBack(this)">(Leave your own comment below)</p>
	        </div>

	    	<form id = "feedback">
	    		<input id = "comment" placeholder="add your comment" form="feedback"></input>
	    		<div class = "btn">
	    			<button id = "submit" onclick = "commenting(comment.value)">submit</button>
	    			<button id = "cancel" onclick="cancel_comment()">cancel</button>

	    		</div>
	    	</form>

	    	<div class = "commentList">
	    		<div class = "finCom">
	    		    <div class = "user">
	    		    	<img id = "userPic" src="https://ru.opensuse.org/images/0/0b/Icon-user.png">
	    			    <h3 id = "emailOf">email</h3>
	    			</div>
	    			    <p id = "enteredFB">feedback</p>
	    			</div>
	    		</div>

	    		<div class = "finCom2">
	    		    <div class = "user2">
	    		    	<img id = "userPic2" src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/4_avatar-512.png">
	    			    <h3 id = "emailOf2">aru@gmail.com</h3>
	    			</div>
	    			<p id = "enteredFB2">A simple visit to the coffee shop can tell you everything you need to know about how many variants of coffee there are you couldnt count them all even if you tried.😊😊 There are so many different brews, beans, and types, that you probably wont be able to taste them in one lifetime.</p>
	    		
	    		</div>

	    		<div class = "finCom2">
	    		    <div class = "user2">
	    		    	<img id = "userPic2" src="https://www.pngarts.com/files/5/Avatar-Face-Transparent.png">
	    			    <h3 id = "emailOf2">aida@gmail.com</h3>
	    			</div>
	    			<p id = "enteredFB2">The moment I walked in I was greeted by a most friendly and courteous staff member😍 The cafe was spotless, also to mention the washroom. The Blonde roast I had was delicious, not too hot as was the Black Bean Wrap.</p>
	    		</div>

	    		<div class = "finCom2">
	    		    <div class = "user2">
	    		    	<img id = "userPic2" src="https://www.pngarts.com/files/5/Avatar-Face-PNG-Image-Background.png">
	    			    <h3 id = "emailOf2">aida@gmail.com</h3>
	    			</div>
	    			<p id = "enteredFB2">Great location. Service is good. Drinks are great. My one complaint is that you need to have gluten free bagels, buns, bread, and desserts. PLEASE do this so I can have something to snack on when I get my coffee 😊</p>
	    		</div>

	    	</div>
	    </div>

	    <div class = "catalog">

	    	

	    	<div class = "card">
	    		
	    		    <img class = "cake" src = "{{ asset('/img/blueberry_cheesecake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>blueberry cheesecake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><input class = "buying" type = "button" value = "place an order"></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/hazelnut_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>hazelnut cake</u></p>
	    		    <p class = "cost">$25.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/strawberry_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>strawberry cake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/spinach_cake.jpg')}}"  onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>spinach cake</u></p>
	    		    <p class = "cost">$22.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	

	    	<br> 
	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/marakuya.jpg')}}"  onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>marakuya cake</u></p>
	    		    <p class = "cost">$26.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>
            
            <div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src =  "{{ asset('/img/honey_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>honey cake</u></p>
	    		    <p class = "cost">$19.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		
	    		    <img class = "cake" src = "{{ asset('/img/cherrish_cheesecake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>cherry cheesecake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/citrus_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>citrus cake</u></p>
	    		    <p class = "cost">$24.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/chocolate_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>chocolate cake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/mango_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>mango cake</u></p>
	    		    <p class = "cost">$27.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	
	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/coffee_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>coffee cake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/tiramisu.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>tiramisu</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>
	    

	    

	    	<div class = "card">
	    		
	    		    <img class = "cake" src = "{{ asset('/img/berry-cheesecake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>berry cheesecake</u></p>
	    		    <p class = "cost">$28.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/apple_cheesecake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>apple cheesecake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/lemon_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>lemon cake</u></p>
	    		    <p class = "cost">$23.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/oreo_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>oreo cake</u></p>
	    		    <p class = "cost">$24.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<br> 
	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/cherry_cake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>cherry cake</u></p>
	    		    <p class = "cost">$21.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>

	    	<div class = "card">
	    		<div class = "image">
	    		    <img class = "cake" src = "{{ asset('/img/vanilla_cheesecake.jpg')}}" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
	    		</div>
	    		<div class = "content">
	    		    <p class = "cakeName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)"><u>vanilla cheesecake</u></p>
	    		    <p class = "cost">$20.99</p>
	    		    <a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "buying">place an order</button></a>
	    		</div>
	    	</div>
	   
	    </div>
	    <div class = "pageChanging">
	    	<p class = "page" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "cataloguePages(this)">①</p>
	    	<p class = "page" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "cataloguePages(this)">②</p>
	    </div>

	    <div class = "howToOrder">

	    	<div class = "formLink">
	    		<p class = "title3"> Place an order here → </p>
	    		<a href = "https://docs.google.com/forms/d/e/1FAIpQLSdGPU-hDHFhq9cI9CPzw3l67DhA9Geg_pyPcTmiAAp7AsARgQ/viewform?usp=sf_link"><button class = "orderButton">go to order</button></a>
	    	</div>

	    	<div>
	    	<div class = "steps">
	    		<div class = "texts">
	    			<p class = "stepNum" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Step 1. </p>
	    		    <p class = "stepDesc">Enter your phone number(it is required) and name. </p>
	    		</div>
	    		<img class = "screen" src="/img/step1.png">
	    	</div>

	    	<div class = "steps">
	    		<div class = "texts">
	    		<p class = "stepNum" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Step 2. </p>
	    		<p class = "stepDesc">Select your choise. </p></div>
	    		<img class = "screen" src="/img/step2.png">
	    	</div>

	    	<div class = "steps">
	    		<div class = "texts">
	    		<p class = "stepNum" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Step 3. </p>
	    		<p class = "stepDesc">Don't forget to enter your address, in case you need delivery. </p></div>
	    		<img class = "screen" src="/img/step3.png">
	    	</div>

	    	<div class = "steps">
	    		<div class = "texts">
	    		<p class = "stepNum" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Step 4. </p>
	    		<p class = "stepDesc">Note a date the order should be ready on.</p></div>
	    		<img class = "screen" src="/img/step4.png">
	    	</div>

	    	<div class = "steps">
	    		<div class = "texts">
	    		<p class = "stepNum" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Step 5. </p>
	    		<p class = "stepDesc">If you have some additional requirements(about decoring) leave them here. </p></div>
	    		<img class = "screen" src="/img/step5.png">
	    	</div>
	    </div>

	</div>

	<button onclick="topFunction()" id="myBtn">↑</button>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnMj8Xc5_jA0tqVHCoFHCk-2sHt4imItA&callback=initMap"></script>

	<script type="text/javascript" src="{{ asset('/js/script.js')}}"></script>

	<hr class = "bottom">

</body>
</html>
