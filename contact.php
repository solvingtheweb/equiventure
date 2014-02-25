<?php include("header.php"); ?>
	
	 <div id="container">
		

		<div id="top3">
		<img src="images/banner_sub.jpg" class="bannershadow">
		</div>
	
	<div id="leftnav">
			<div class="sub_menu_heading"><h1>About Us</h1></div>
			
	
	<div id="navcontainer">
		<ul id="navlist">
	
		<li><a href="overview.php">Executive Team</a></li>
		<li><a href="supportteam.php">Support Team</a></li>
		<li class="bottom"><a href="contact.php">Contact Us</a></li>
		
		</ul>
	</div>


	</div>





	<div id="subcontent">
			
                <h1> Contact Us</h1><br>

		
		<img src="images/contact.jpg" class="subimage">
		<P> Use the form below to submit any questions/comments you may have.</P>
	
	
	<form action="formmail.php" method="POST">
		<input type=hidden name="recipient" value="chris@solvedesign.com">
		<input type=hidden name="subject" value="Website Inquiry">
		<input type=hidden name="redirect" value="http://www.equiventurecapital.com">
	<table class="contactform">
		<tr>
			<td>Name:</td><td><input type=text name="realname"></td>

		</tr>
		<tr>
			<td>Company:</td><td><input type=text name="company"></td>
		</tr>
		<tr>
			<td>Address:</td><td><input type=text name="address"></td>
		</tr>
		<tr>

			<td>City:</td><td><input type=text name="city"></td>
		</tr>
		<tr>
			<td>State:</td><td><input type=text name="state"></td>
		</tr>
		<tr>
			<td>Zip:</td><td><input type=text name="zip"></td>

		</tr>
		<tr>
			<td>Phone:</td><td><input type=text name="phone"></td>
		</tr>
		<tr>
			<td>Fax:</td><td><input type=text name="fax"></td>
		</tr>
		<tr>

			<td>E-mail:</td><td><input type=text name="email"></td>
		</tr>
	</table>
	<table class="contactform">
		<tr>
			<td>Tell us what you are interested in:</td>
		</tr>
		<tr>

			<td><textarea rows="4" cols="45" name="body"></textarea></td>
		</tr>
		<tr>
			<td><input type=submit value=Submit> <input type=reset value=Reset></td>
		</tr>
	</table>
 	</form>
	

		
	</div>

	
	<?php include("footer.php"); ?>
	
	</div>

	<div id="belowfooter"></div>