<?php include("header.php"); ?>
	
	 <div id="container">
		

		<div id="top3">
		<img src="images/banner_sub.jpg" class="bannershadow">
		</div>
	
	<div id="leftnav">
			<div class="sub_menu_heading"><h1>Quick Quote</h1></div>
			
	
	<div id="navcontainer">
		<ul id="navlist">
		
		<li id="active"><a href="quickquote.php">Get a Quick Quote</a></li>
		
		</ul>
	</div>


	</div>





	<div id="subcontent">
			
                <h1> Quick Quote</h1><br>

		
	
		<P> Use the form below to submit the information required to receive a quick quote on your project.</P>
	
	
	<form action="formmail.php" method="POST">
		<input type=hidden name="recipients" value="evallone@equiventurecapital.com">
		<input type=hidden name="subject" value="Website Inquiry - Quick Quote">
		<input type=hidden name="good_url" value="http://www.equiventurecapital.com">
		<input type=hidden name="bad_url" value="http://www.equiventurecapital.com">
		
	<table class="contactform">
		<tr>
			<td>* Loan Amount:</td><td><input type=text name="Amount"></td>

		</tr>
		<tr>
			<td>* Property Value:</td><td><input type=text name="Value"></td>

		</tr>
		<tr>
			<td>* Mid Fico Score:</td><td><input type=text name="Fico"></td>

		</tr>
		<tr>
			<td>* Property Type:</td><td><input type=text name="Property Type"></td>

		</tr>
		<tr>
			<td>* Property City:</td><td><input type=text name="Property City"></td>

		</tr>
		<tr>
			<td>* Property State:</td><td><select name="Property State">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
								</td>

		</tr>
		<tr>
			<td>* Email:</td><td><input type=text name="email"></td>

		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td>Broker Name:</td><td><input type=text name="brokername"></td>

		</tr>
		<tr>
			<td>Company Name:</td><td><input type=text name="company"></td>
		</tr>
		<tr>
			<td>Address:</td><td><input type=text name="address"></td>
		</tr>
		<tr>

			<td>City:</td><td><input type=text name="city"></td>
		</tr>
		<tr>
			<td>State:</td><td><select name="state">
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>

						</td>
		</tr>
		<tr>
			<td>Zip:</td><td><input type=text name="zip"></td>

		</tr>
		<tr>
			<td>Phone:</td><td><input type=text name="phone"></td>
		</tr>
		<tr>
			<td><input type=submit value=Submit></td>
		</tr>
		<tr>
			<td><i>* - Required Fields</i></td>
		</tr>
		
	</table>
	
 	</form>


		
	</div>

	
	<?php include("footer.php"); ?>
	
	</div>

	<div id="belowfooter"></div>