<html>
<head>
<title>Phone Database</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script type="text/javascript">
<!--
	function linkGenerator(x){
		window.open("devicesSpecs/" + x + ".html", "_self");
	}
-->
</script>
</head>
<body>
<?php
			session_start();
			$mybool=true;
			$user="root";
			$pass="";
			$host="localhost";
			$db='mob';
			@mysql_connect($host,$user,$pass);
			@mysql_select_db($db);
			
			if(!@mysql_connect($host,$user,$pass)and !@mysql_select_db('mob'))
			{
				$message="Couldn't connect to the database";
				echo 
  				"<script type=\"text/javascript\">".
 				"window.alert('Failed To Connect To the DataBase.Please Inform the Admin');".
  				"</script>"; 
				die('<center><h1>Inform The Admin...SERVER ERROR</h1>');
				
			}
			
			$query="SELECT * FROM  `page` ";
			$query_run=mysql_query($query);				
				while($table=mysql_fetch_assoc($query_run))
					{
						$counter=$table['pagecounter'];	
						if($counter==0)
							$mybool=true;
						else
							$mybool=false;
					}	
			
							
	
	if(isset($_SESSION['username']) and ($mybool==true))
	{	$bool=false;	
		$username=$_SESSION['username'];
		$name=strtoupper($username);
		if($name=="ADMIN")
		$bool=true;		
		echo '<div id="top">';
		  echo '<div class="shell">';
			 echo '<div id="header">';
			   echo '<h1 id="logo"><a href="#">Urgan Gear</a></h1>';
			 	 echo ' <div id="navigation">';
					echo ' <ul>';		
					 echo '  <li><a href="#">Home</a></li>';
				 	echo ' <li><a style="text-shadow:#000000;color:#CCFFFF;text-decoration:none">Hello '.$name.'</a></li>';	
				  echo ' <li><a href="sub/loggingout.php">Logout</a></li>';	
				  	if($bool==true)
					{					
				   	echo ' <li><a href="sub/form.php">Add Devices</a></li>';	
					}		 
				 echo '  <li class="last"><a href="mailto:rawatarun65@gmail.com">Contact</a></li>';
				 echo '</ul>';
			   echo '</div>';
			 echo '</div>';
		   echo '</div>';
		 echo '</div>		<br>';	 
		 
	}	 
	else
	{
		echo '<div id="top">';
		  echo '<div class="shell">';
			 echo '<div id="header">';
			   echo '<h1 id="logo"><a href="#">Urgan Gear</a></h1>';
			  echo ' <div id="navigation">';
				echo ' <ul>';
				 echo '  <li><a href="#">Home</a></li>';
				  echo ' <li><a style="text-shadow:#000000;color:#00FF00;text-decoration:none">Hello GUEST</a></li>';				
				   echo '<li><a href="sub/login.php">Login</a></li>';				  
				 echo '  <li class="last"><a href="mailto:rawatarun65@gmail.com">Contact</a></li>';
				 echo '</ul>';
			   echo '</div>';
			 echo '</div>';
		   echo '</div>';
		 echo '</div>		<br>';
	
	}
 ?>		
 
		<div id="templatemo_left_content" >
		<hr noshade size="10"/>		
			<div title="Brand">			
				<center><h2 style="color:#000000;font-style:italic">BRAND</h2></center><br>
				<form>					
					<input type="checkbox" name="brand" value="Samsung"/>SAMSUNG<br>
					<input type="checkbox" name="brand" value="Nokia"/>NOKIA<br>
					<input type="checkbox" name="brand" value="HTC"/>HTC<br>
					<input type="checkbox" name="brand" value="Apple"/>APPLE<br>
					<input type="checkbox" name="brand" value="Motorola"/>MOTOROLA<br>
					<input type="checkbox" name="brand" value="Sony"/>SONY<br>
					<input type="checkbox" name="brand" value="LG"/>LG<br>					
					<input type="checkbox" name="brand" value="karbonn"/>KARBONN<br>
					<input type="checkbox" name="brand" value="Gionee" height="2"/>GIONEE<br>					
				</form>
			</div>		<br>
			<hr noshade size="10"/>
			<div>
				<center><h2 style="color:#000000;font-style:italic">OS</h2></center><br>
				<form>
					<input type="checkbox" name="os" value="Windows"/>WINDOWS<br>
					<input type="checkbox" name="os" value="Windows"/>ANDROID<br>														
				</form>
			</div>	<br>
			<br>
			<hr noshade size="10"/>
			<div>
				<center><h2 style="color:#000000;font-style:italic">Maximum Price Range</h2></center><br>
				<form>
					<input type="text"/><br><br>
					<div align="right" >
						<input type="submit" value="GO" placeholder="in Ruppes"/>
					</div>																						
				</form>
			</div>			
		</div>
	
		<div >	
              <div class="items">
              <ul onClick="linkGenerator(hello)">
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('note3')" src="devicesSpecs/devices/note3.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Samsung</a> </p>
                  <p class="price">Wholesale Price: <strong>$709.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('droid')" src="devicesSpecs/devices/droid.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Motorola</a> </p>
                  <p class="price">Wholesale Price: <strong>$569.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('s4')" src="devicesSpecs/devices/s4.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Samsung</a> </p>
                  <p class="price">Wholesale Price: <strong>$549.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('one')" src="devicesSpecs/devices/one.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">HTC</a> </p>
                  <p class="price">Wholesale Price: <strong>$629.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('5c')" src="devicesSpecs/devices/5c.png" width=100 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">IPhone</a> </p>
                  <p class="price">Wholesale Price: <strong>$529.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('5s')" src="devicesSpecs/devices/5s.png" width=100 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">IPhone</a> </p>
                  <p class="price">Wholesale Price: <strong>$569.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('m8')" src="devicesSpecs/devices/m8.jpg" width=120 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">HTC</a> </p>
                  <p class="price">Wholesale Price: <strong>$449.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('i5')" src="devicesSpecs/devices/i5.png" width=100 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">IPhone</a> </p>
                  <p class="price">Wholesale Price: <strong>$559.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('i4')" src="devicesSpecs/devices/i4.png" width=100 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Iphone</a> </p>
                  <p class="price">Wholesale Price: <strong>$709.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('nexus5')" src="devicesSpecs/devices/nexus5.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">LGE</a> </p>
                  <p class="price">Wholesale Price: <strong>$449.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('z1')" src="devicesSpecs/devices/z1.jpg" width=120 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">SONY</a> </p>
                  <p class="price">Wholesale Price: <strong>$529.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('s5')" src="devicesSpecs/devices/s5.png" width=100 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Samsung</a> </p>
                  <p class="price">Wholesale Price: <strong>$629.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('g2_2')" src="devicesSpecs/devices/g2_2.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">LGE</a> </p>
                  <p class="price">Wholesale Price: <strong>$539.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('mega')" src="devicesSpecs/devices/mega.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Samsung</a> </p>
                  <p class="price">Wholesale Price: <strong>$499.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('g2_3')" src="devicesSpecs/devices/g2_3.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">LGE</a> </p>
                  <p class="price">Wholesale Price: <strong>$529.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('g2_4')" src="devicesSpecs/devices/g2_4.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">LGE</a> </p>
                  <p class="price">Wholesale Price: <strong>$629.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('mg')" src="devicesSpecs/devices/mg.jpg" width=120 height=150 alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Motorola</a> </p>
                  <p class="price">Wholesale Price: <strong>$239.99</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('one_2')" src="devicesSpecs/devices/one_2.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">HTC</a> </p>
                  <p class="price">Wholesale Price: <strong>$549.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('note3_1')" src="devicesSpecs/devices/note3_1.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Samsung</a> </p>
                  <p class="price">Wholesale Price: <strong>$529.00</strong></p>
                </li>
                <li>
                  <div class="image"> <a href="#"><img onClick="linkGenerator('lumia1520')" src="devicesSpecs/devices/lumia1520.jpg" alt=""></a> </div><br>
                  <p> Item Number: <span>125515</span><br>
                    Brand Name: <a href="#">Nokia</a> </p>
                  <p class="price">Wholesale Price: <strong>$549.00</strong></p>
                </li>
              </ul>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
        <div id="footer">
          <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </div>
          <div class="right"> &copy; MoG.com. Design by <a href="#">Arun Rawat</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
			</div>
							
        </div>
	
		 
	
</body>
</html>
