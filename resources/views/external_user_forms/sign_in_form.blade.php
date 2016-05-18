<html>
	<body>
		
		<?php
			echo Form::open(array('url' => '/validating','method'=>'get'));
				
				echo "SIGN IN"."<br>";
				
				echo "Enter your email address\t"; 
					echo Form::text('email');
						echo '<br/>';
				
				echo "Enter your password\t"; 	
					echo Form::password('password');
						echo '<br/>';
				
				
				echo Form::submit('GO');

				
				echo Form::close();
		?>
		
	</body>
</html>

	