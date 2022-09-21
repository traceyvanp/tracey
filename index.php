<?php

include_once 'ExternalValidatorException.php';
include_once 'ExternalValidator.php';


$incomingData = json_decode(file_get_contents('php://input'),true);
if($incomingData['service_id'] === "14"){
    echo json_encode(array());
} else {
    $validator = new ExternalValidator();
    $result = $validator->validate($incomingData);
    echo json_encode($result);
}

/* uncomment for local testing
$incomingData = json_decode(file_get_contents('booking.json'),true);
if($incomingData['service_id'] === "14"){
    echo json_encode(array());
} else {
    $validator = new ExternalValidator();
    $result = $validator->validate($incomingData);
    echo json_encode($result);
}
*/

?>
