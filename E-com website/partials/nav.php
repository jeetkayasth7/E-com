
<div class = "navbar">
    <div class="logo">
        <img src="pictures/logo.png" width="175px"></img>
    </div>
<nav>
    <ul id="MenuItems">
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
	<?php  
		 //session_start();
		if(isset($_SESSION['login'])){

			 echo '<li><img src="pictures/user2.png" width="30px" height=30px" class="account">
              <a href="#" class="name">'.$_SESSION['name'].'</a>
             </li>
             <li> <a href="products.php#category">Category</a></li>
             <li> <a href="cart.php"><img src="pictures/cart.jpg" width="30px" height="30px"></a></li>
             <li><a href="_logout.php"><img src="pictures/logout2.png" width="35px" height="35px"></a></li>
             ';
          ?>
                        	
 
		<?php	 }
		
			 else{
			// echo '<li><a href="account.php">Account</a></li>';
			echo '<li><a href="account.php">Login/Resgister</a></li>';
			
			 
			 }
         ?> 
        </ul>
    </nav> 
            </div>
