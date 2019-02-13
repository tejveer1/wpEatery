<?php include('header.php'); ?>
<?php
	     $host = "localhost:3306";
		 $user = "root";
		 $password = "jaskaur644";
		 $database = "wp_eatery";
		 $mailing = "mailingList";
				
    $mysql = new mysqli($host, $user, $password, $database); 

	if ($mysql->connect_errno){ 
		      echo( $mysql->connect_errno . "-" . $mysql->connect_error );
		  }

			$query = "SELECT * FROM `$mailing`";

			$statement = $mysql->prepare($query);

			$rslt = $statement->execute();

			$result = $statement->get_result();	
		  
            echo "<table border='3'>";
			echo "<tr><strong><th>Customer Name</th><th>Phone Number</th><th>Email Address</th></strong></tr>";
			while ($row = $result->fetch_assoc()){
	        $action = "mailing_list.php";
			echo "<tr>";
			echo "<td>".$row['customerName']."</td><td>".$row['phoneNumber']."</td><td>".$row['emailAddress']."</td>";
			echo "</tr>";
            } 
	echo "</table>";	
	
?>	
<?php include('footer.php'); ?>			
				
			