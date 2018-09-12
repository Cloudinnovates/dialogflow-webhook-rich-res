<?php
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	
// 	$paramGeoCity = ucfirst($json->queryResult->queryText);
// 	$paramBedroom = $json->queryResult->parameters->bedroom;
// 	$fulfillmentText = "We have " . rand(1, 1000) . " apartment listings at " . $paramGeoCity . " with " . $paramBedroom;
		
// 	$response->fulfillmentText = $fulfillmentText;
	//$response->displayText = $fulfillmentText;
	//$response->source = "webhook";
  
  $response = new \stdClass();
  $card = array(array('card' => array('title' => 'john', 'subtitle' => 'john hoge')),
              array('card' => array('title' => 'jane', 'subtitle' => 'jane hoge')));
	
  $response->fulfillmentMessages = $card;
	echo json_encode($response);
}
?>
