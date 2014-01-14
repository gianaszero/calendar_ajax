<?php 
$year=$_GET['year'];
$month=$_GET['month'];
$is_leap = (($year % 4) == 0) ? true:false;

if(in_array($month, array('jan','mar','may','jul','aug','oct','dec'))){
	$day = 31;
}elseif(in_array($month,array('apr','jun','sept','nov'))){
	$day = 30;
}elseif($month == 'feb'){
	if($is_leap){
		$day = 29;
	}else{
		$day = 28;
	}
}

echo json_encode(
		array(
			'day'=> $day
			)
	);

// if($year % 4 == 0){
// 	if(in_array($months,array('jan','mar','may','jul','aug','oct','dec'))){
// 		$days=31;
// 	}elseif(in_array($months,array('apr','jun','sept','nov'))){
// 		$days =30;
// 	}elseif($months == 'feb'){
// 		$days = 29;
// 	}else{
// 		$days = false;
// 	}
// 	if($days !== false){
// 		echo json_encode(
// 			array(
// 				'month' => $months,
// 				'result' =>'success',
// 				'days' => $days
// 			));
// 	}else{
// 		echo json_encode(
// 			array(
// 				'course' => $course,
// 				'result' => 'failed'
// 				));
// 	}
// }else{
// 	if(in_array($months,array('jan','mar','may','jul','aug','oct','dec'))){
// 		$days=31;
// 	}elseif(in_array($months,array('apr','jun','sept','nov'))){
// 		$days =30;
// 	}elseif($months == 'feb'){
// 		$days = 28;
// 	}else{
// 		$days = false;
// 	}
// 	if($days !== false){
// 		echo json_encode(
// 			array(
// 				'month' => $months,
// 				'result' =>'success',
// 				'days' => $days
// 			));
// 	}else{
// 		echo json_encode(
// 			array(
// 				'course' => $course,
// 				'result' => 'failed'
// 				));
// 	}
// }
// if($months !== false){
// 		echo json_encode(
// 			array(
// 				'year' => $year,
// 				'result' =>'success',
// 				'months' => $months
// 			));
// 	}else{
// 		echo json_encode(
// 			array(
// 				'year' => $year,
// 				'result' =>'failed',
// 				));
// 	}
 ?>
