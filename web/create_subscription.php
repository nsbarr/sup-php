<?php // Create a customer using a Stripe token

// If you're using Composer, use Composer's autoload:
require_once('../vendor/autoload.php');

// Be sure to replace this with your actual test API key
// (switch to the live key later)
\Stripe\Stripe::setApiKey("sk_test_4OlzpszvpDJWBNrg7EAl6v3b");

try
{
  $customer = \Stripe\Customer::create(array(
    'email' => $_POST['stripeEmail'],
    'source'  => $_POST['stripeToken'],
    'plan' => 'EmployeeOfTheMonth'
  ));

  header('Location: https://employeeofthemonth.herokuapp.com/success');
  exit;
}
catch(Exception $e)
{
  header('Location: https://employeeofthemonth.herokuapp.com/error');
  error_log("unable to sign up customer:" . $_POST['stripeEmail'].
    ", error:" . $e->getMessage());
}