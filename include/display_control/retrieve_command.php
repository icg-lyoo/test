<?php
$json_content = json_decode(file_get_contents('../../data.json'), true);
if(isset($json_content['screens']['attempted']) && $json_content['screens']['attempted'] == true)
{
	exit;
}
$model = $json_content['screens']['tv_model'];
$load = true;

switch($model)
{
	case 'lg':
		require_once('lgDisplay.class.php');
		$display = new lgDisplay();
		break;
	case 'philips':
		require_once 'philipsDisplay.class.php';
		$display = new philipsDisplay();
		break;
	case 'sharp':
		require_once 'sharpDisplay.class.php';
		$display = new sharpDisplay();
		break;
	default:
		$load = false;
		break;
}
$output = array();
if(!$load)
{
	$output['status'] = 0;
	$output['message'] = 'Model not supported. Must be LG, Sharp, or Philips';
}

$powerState = $json_content['screens']['power_state'];

if($powerState == 1)
{
	$display->powerOn();
	$json_content['screens']['attempted'] = true;
	$output['status'] = 1;
}
elseif($powerState == 0)
{
	$display->powerOff();
	$json_content['screens']['attempted'] = true;
	$output['status'] = 1;
}
else{
	$output['status'] = 0;
	$output['message'] = 'Invalid command or nothing to do.';
}
file_put_contents('../../data.json', json_encode($json_content));
echo json_encode($output);
?>
