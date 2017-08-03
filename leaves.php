<?php
$al_leaves = 18;
$each_month_leaves = 18/12;
$year = 1;
$month = 4;
$leaves = 0;
$credit_l = 5;
$emp_loc = 'India';

if($year < 1):
	if($month <= 3):
			echo 'you are in probation period';
	else:
	        $bal = $each_month_leaves*$month;
			$leaves = $leaves+$bal;
			echo 'You have total earned leaves = '.$leaves;
	endif;
else: 
   if($emp_loc !== 'India'):
			$leaves	= $month*$each_month_leaves;
			//$leaves = $leaves+$total_levaes_per_month;
			echo "$leaves";
   else:
		//find annual_leaves from emp database
	        $leaves	= $month*(($al_leaves+$credit_l)/12);
			//$leaves = $leaves+$total_levaes_per_month;
			echo "$leaves"."&nbsp;&nbsp;&nbsp;".ceil($leaves);
   endif;
endif;

$apply_l = 7;
$leaveType = 'nohalfday';
if($apply_l > 1):
	 $leaves_apply = $apply_l;
	if($leaveType === 'halfday'):
		echo 'you cannot apply halfday leave continously';
		exit();
	endif;
	if($leaves < $apply_l):
			echo "<br>".'you have left only '.$leaves.' leaves';
			echo "<br>".'you cannot apply for morethan '.$leaves.' leaves';
	else:
			$leaves_bal = $leaves-$apply_l;
			echo "\r".'total leaves left -> '.$leaves_bal;
	endif;
else:
    if($leaveType === 'halfday'):
		$leaves_bal = $leaves - ($apply_l/2);
		echo $leaves_bal;
	endif;
endif;
?>
