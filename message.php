<?php 
	$email;$comment;$captcha;
	if(isset($_POST['email'])){
		$email=$_POST['email'];
	}
	if(isset($_POST['g-recaptcha-response'])){
		$captcha=$_POST['g-recaptcha-response'];
	}
	if(!$captcha){
		$message='<p>Please check the the captcha form.</p>';
		exit;
	}
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfIoQQTAAAAAHwDRjoSyQPB15IN_46rkFjk54cN&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
	if($response.success==false)
	{
		$message='<p>You are spammer! Get out!</p>';
	}else
	{
		mail("plansmash@me.com", "Contact Us Form", "$_POST[comments]", "FROM: $_POST[name] <$_POST[email]>");
		$message='<p>Thanks for posting comment.</p>';
	}
$title="Form response";
$filename=basename(__FILE__);
?>
	<?php include 'base/includes/top.php'; ?>
	<h1><?php echo $title;?></h1>
	<?php echo $message; ?>
	<?php include 'base/includes/bottom.php'; ?>
