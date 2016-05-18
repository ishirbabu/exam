<html>
	<body>
		<?php
			echo Form::open(array('url' => 'create','method'=>'get'));
				
				echo "CREATE ACCOUNT"."<br>";

				echo "Enter your first name\t"; 
					echo Form::text('first_name');
						echo '<br/>';
				
				echo "Enter your last name\t"; 
					echo Form::text('last_name');
						echo '<br/>';
				
				echo "Enter your email address\t"; 
					echo Form::text('email');
						echo '<br/>';
				
				echo "Enter your password\t"; 	
					echo Form::password('password');
						echo '<br/>';
				
				echo "Re_enter your password\t"; 	
					echo Form::password('re_password');
						echo '<br/>';

				echo Form::submit('submit');

				
				echo Form::close();
		?>
	</body>
</html>
