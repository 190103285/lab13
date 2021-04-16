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
	
	<!--<input type="checkbox" name="" id = "toggle">
	<div class = "header">
		<div id = "home" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick="window.location.reload()">home</div>
		<div id = "catalogue" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >catalogue</div>
		<div id = "ordering" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >ordering</div>
		<div id = "contacts" class = "headElement" onmouseover = "coloring(this)" onmouseout="coloringBack(this)" onclick = "pages(this)" >contacts</div>
	</div>

    <nav class="menu">
    <ul>
    <li><a href="index.html">home</a></li>
    <li></li>
    <li></li>
    <li></li>
    </ul>
    </nav>-->

	<hr id = "hr2">
    
    <p id = "titleName" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Online ordering</p>

	<div class = "main">
		<table class = "row1">
			<tr>
				<td class = "left">
		            <img id="mainPic" src = "https://i.pinimg.com/originals/ad/14/40/ad1440593673a6b4cb0a0525da9948e4.jpg"  onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">
		        </td>

		        <td class = "right">
		   
		            <img id="rightSided" src="http://static2.vigbo.com/u23942/29408/blog/2315966/638876/7579223/500-90d5ba9e751ac32c4658b1878c3b0ff7.jpg" onmouseover="opacityChanging(this)" onmouseout="opacityBack(this)">

		            
		            <h3 id = "title2" onmouseover = "coloring(this)" onmouseout="coloringBack(this)">How to order?</h3>
		            <p id="article">Bake&Shake is a coffee house in Boise,ID with wonderful cakes you need to taste. <span class = "hidden">Вue to quarantine, we also bake custom-made cakes. Check the list of our desserts in "catalogue" page and leave a request in google forms. </span></p>
		        </td>
		    </tr>
		</table>
		</div>
	</div>

	    <br>

	    <p class = "divider">
	    	<img id = "whisk" src = "{{ asset('/img/divider.jpg')}}">
	    </p>

	    <div class = "row2">

	    	<div class = "titles">
	    	    <h2 id = "mainTitle"onmouseover = "coloring(this)" onmouseout="coloringBack(this)">Order</h2>
	    	    <!--<p id = "secondTitle"onmouseover = "coloring(this)" onmouseout="coloringBack(this)">(Leave your order below)</p>-->
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
            </div>

	<div class="file-uploading">
   
    <div>
      <div ><p style="font-family : 'Poiret One', cursive;">Upload your image here</p></div>
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div >
            <p>{{ $message }}</p>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div>
                Inappropriate file format.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div>
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div>
                    <button type="submit" >Upload</button>
                </div>
   
            </div>
        </form>
      </div>
    </div>
</div>

	</div>

	<button onclick="topFunction()" id="myBtn">↑</button>

	<script type="text/javascript" src="{{ asset('/js/script.js')}}"></script>

	<hr class = "bottom">

</body>
</html>
