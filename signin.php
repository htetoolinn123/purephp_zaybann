<?php 

	include 'db_connect.php';

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * from users WHERE email=:email AND password=:password";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':password',$password);
	$stmt->execute();


	//session_start();
	if($stmt->rowCount() <= 0)
	{
		if(!isset($_COOKIE['logInCount']))
		{
			$logInCount=1;
		}
		else
		{
			$logInCount=$_COOKIE['logInCount'];
			$logInCount++;
		}

		setcookie('logInCount',$logInCount, time()+30);
		if($logInCount > 3)
		{
			//time_out design
			include('frontend_header.php');
			include('signcontent.php');

			include ('frontend_footer.php');

			echo "<script type=\"text/javascript\">
					(function(){
						setTimeout(function(){
								location.href='login.php';
							},10000);
						})();
					</script>";
					unset($_COOKIE['logInCount']);
					setcookie('logInCount','',time()-10);	
		}
		else
		{
			session_start();
			$_SESSION['login_reject'] = "Email and password is not invalid";

			header("location: login");
		}

		//header("location: login");
	}

	else
	{
		session_start();
		
		$user=$stmt->fetch(PDO::FETCH_ASSOC);

		//var_dump($user);

		$_SESSION ['loginuser'] = $user;

		//Admin
		if($user['role_id']==1){
		header("location:dashboard");
		}
		//customer
		else{
		header("location:index");
		}

	}

	

 ?>