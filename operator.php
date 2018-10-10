<?php


	//Arichmetic operator (+,-,*,/,%)

	/*Arichmetic operator 
	(+,-,*,/,%)*/

	$father=60;
	$son=30;

	/*a=10
	b=30
	c=a+b*/
	$total= $father+$son;
	echo $total.'<br>';

	$father=60;
	$son=30;
	$total= $father-$son;
	echo $total.'<br>';

	$father=60;
	$son=30;
	$total= $father*$son;
	echo $total.'<br>';

	$father=60;
	$son=30;
	$total= $father/$son;
	echo $total.'<br>';

	$father=60;
	$son=30;
	$total= $father%$son;
	echo $total;


	//assignment operators (+=,-=,*=,/=,%=)

	$age=20;
	$age=$age+5;
	echo $age.'<br>';

	$age=20;
	$age+=5;
	echo $age.'<br>';

	$age=20;
	$age-=5;
	echo $age.'<br>';

	$age=20;
	$age*=5;
	echo $age.'<br>';

	$age=20;
	$age/=5;
	echo $age.'<br>';

	$age=20;
	$age%=5;
	echo $age. '<br>';

	//logical operator(||,&&,! )

	$username ='Shuily';
	$pass='shuily777';

	if ($username =='Shuily'&& $pass=='shuily777'){

		echo 'welcome'. '<br>';
	}
	else{

		echo 'username or password wrong'. '<br>';
	}

	$username='shuily';
	$pass='shuily778';

	if($username=='shuily' && $pass=='shuily777'){
		echo 'ok';


	}
	else{

		echo 'go home' . '<br>';
	}

	$username ='Shuily';
	$pass='shuily777';

	if ($username =='Shuily'|| $pass=='shuily777'){

		echo 'welcome'. '<br>';
	}
	else{

		echo 'username or password wrong';
	}



?>