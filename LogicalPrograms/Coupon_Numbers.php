<?php
$couponCount=0;
$randomCount=0;
$j=0;
$n = 10;
$distinctArray =new SplFixedArray($n);
while(($couponCount<=$n) && ($j<$n))
{
	$flag=0;
	$randomCoupon = rand(1, 10);
	echo "Random is:".$randomCoupon."\n";
	$randomCount=$randomCount+1;
	for($i=0; $i<$n; $i++)
	{
		if($distinctArray[$i]==$randomCoupon)
		{
    		$flag=$flag+1;
			//System.out.println("Flag: "+flag);
			break;
		}
		else
		{
			$flag=$flag;
			//System.out.println("Flag: "+flag);
		}
	}
	if($flag==0)
	{
		$distinctArray[$j]=$randomCoupon;
		echo "Added Coupon is: ".$distinctArray[$j]."\n";
		$j++;
		$couponCount=$couponCount+1;
		echo "Coupon Count is : ".$couponCount."\n";
	}
}
echo "No.of Randoms Generated: ".$randomCount."\n";
echo "Distinct Coupons: \n";
for($k=0; $k<$n; $k++)
{
	echo $distinctArray[$k]." ";
}