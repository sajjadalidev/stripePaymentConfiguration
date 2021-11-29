<?php  
	require_once('vendor/autoload.php');

	$firstName=$_POST["fname"];
	$lastName=$_POST["lname"];
	$email=$_POST["email"];
	$amount=$_POST["amount"];

	\Stripe\Stripe::setApiKey('sk_test_26PHem9AhJZvU623DfE1x4sd');

	$response=\Stripe\PaymentIntent::create([
	  'amount' => $amount,
	  'currency' => 'usd',
	  'payment_method_types' => ['card'],
	  'receipt_email' => $email,
	]);
	print_r($response);
?>