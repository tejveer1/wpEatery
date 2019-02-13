 <?php include('header.php'); ?>
            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="POST" action="contacts.php">
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="customerName" id="customerName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>Newspaper<input type="radio" name="referral" id="referralNewspaper" value="newspaper">
                                    Radio<input type="radio" name='referral' id='referralRadio' value='radio'>
                                    TV<input type='radio' name='referral' id='referralTV' value='TV'>
                                    Other<input type='radio' name='referral' id='referralOther' value='other'>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>

					
		<?php

	                $customerName=@$_POST['customerName'];
	                $phoneNumber=@$_POST['phoneNumber'];
	                $emailAddress=@$_POST['emailAddress'];
                    $referral=@$_POST['referral'];
	                $errorHostMessage ="";
	                $errorHost = false;
	
	    if (@$_POST["btnSubmit"] == "Sign up" ){
      if (isset($customerName) && !empty(trim($customerName)) && (preg_match("/^[a-zA-Z ]*$/",$customerName))){}
	    else {
		        echo "<span style= \"color: Red\">Please Enter the name and only white spaces and letters are allowded. It is Mandatory.</span><br>";
		        $errorHost = true;
	         }
	   
		 	         if (isset($phoneNumber) && preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phoneNumber)) {}
	    else 
	         {
		        echo "<span style= \"color: Red\">Please enter phone number and it must be a number and in the format of 000-000-0000</span><br>";
		        $errorHost = true;
		     }
					
		     if (isset($emailAddress) && (filter_var($emailAddress, FILTER_VALIDATE_EMAIL))) {}
		else 
	         { 
	            $errorHost = true;
		        echo "<span style= \"color: Red\">Please Enter the valid email address in the valid format.</span><br>";
	         }  
	  
		         if (@$_POST['referral']=='radio' || @$_POST['referral'] == 'TV' || @$_POST['referral'] == 'other' || @$_POST['referral'] =='newspaper'){}
		else
	         { 
	           	$errorHost = true;
	            echo "<span style= \"color: Red\">Select one .... How did you hear option.</span><br>";
	         }
	  
		     if ( $errorHost == false){
				
	         $dbhost = "localhost:3306";
		     $dbuser = "root";
		     $dbpassword = "";
	         $dbdatabase = "wp_eatery";
		     $dbTable = "mailingList";
	     
     		 $Database = new mysqli($dbhost, $dbuser, $dbpassword,$dbdatabase);
		
		     if ($Database->connect_errno) { 
		     echo( $Database->connect_errno . "-" . $Database->connect_errorHost);
		     }
	
	         $query = "INSERT INTO $dbdatabase.$dbTable (customerName,phoneNumber,emailAddress,referrer) VALUES (?,?,?,?)";
			
		     $declaring = $Database->prepare($query);
		
             $INSERTING = $declaring->bind_param('ssss',
		                         $customerName,
		                         $phoneNumber,
		                         $emailAddress, 
		                         $referral);

		     $INSERTING = $declaring->execute();

            echo "<span style= \"color: Red\">The Data Is saved </span>";
             } 
		
    }												
?>
                </div><!-- End Main -->
            </div><!-- End Content -->
           <?php include('footer.php'); ?>
