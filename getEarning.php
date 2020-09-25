<?php

	include 'db_connect.php';


	//january
	$Jan_first = strtotime('First day of january');
	$Jan_last = strtotime('last day of january');
	$Jan_start = date ("Y-m-d",$Jan_first);
	$Jan_end = date ("Y-m-d",$Jan_last);

	$Jan_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Jan_start' AND '$Jan_end'";

	$Jan_stmt=$pdo->prepare($Jan_sql);
	$Jan_stmt->execute();
	$Jan_resultdata= $Jan_stmt->fetch(PDO::FETCH_ASSOC);

	
	

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Jan_resultdata)
	{
		$Jan_result = $Jan_resultdata['total'];
	}
	else
	{
		$Jan_result = 0;
	}

	//february
	$Feb_first = strtotime('First day of february');
	$Feb_last = strtotime('last day of february');
	$Feb_start = date ("Y-m-d",$Feb_first);
	$Feb_end = date ("Y-m-d",$Feb_last);

	$Feb_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Feb_start' AND '$Feb_end'";

	$Feb_stmt=$pdo->prepare($Feb_sql);
	$Feb_stmt->execute();
	$Feb_resultdata= $Feb_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $Feb_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Feb_resultdata)
	{
		$Feb_result = $Feb_resultdata['total'];
	}
	else
	{
		$Feb_result = 0;
	}


	//january
	$Mat_first = strtotime('First day of march');
	$Mat_last = strtotime('last day of march');
	$Mat_start = date ("Y-m-d",$Mat_first);
	$Mat_end = date ("Y-m-d",$Mat_last);

	$Mat_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Mat_start' AND '$Mat_end'";

	$Mat_stmt=$pdo->prepare($Mat_sql);
	$Mat_stmt->execute();
	$Mat_resultdata= $Mat_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $Jan_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Mat_resultdata)
	{
		$Mat_result = $Mat_resultdata['total'];
	}
	else
	{
		$Mat_result = 0;
	}


	//january
	$April_first = strtotime('First day of april');
	$April_last = strtotime('last day of april');
	$April_start = date ("Y-m-d",$April_first);
	$April_end = date ("Y-m-d",$April_last);

	$April_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$April_start' AND '$April_end'";

	$April_stmt=$pdo->prepare($April_sql);
	$April_stmt->execute();
	$April_resultdata= $April_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $April_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($April_resultdata)
	{
		$April_result = $April_resultdata['total'];
	}
	else
	{
		$April_result = 0;
	}


	//january
	$May_first = strtotime('First day of may');
	$May_last = strtotime('last day of may');
	$May_start = date ("Y-m-d",$May_first);
	$May_end = date ("Y-m-d",$May_last);

	$May_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$May_start' AND '$May_end'";

	$May_stmt=$pdo->prepare($May_sql);
	$May_stmt->execute();
	$May_resultdata= $May_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $May_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($May_resultdata)
	{
		$May_result = $May_resultdata['total'];
	}
	else
	{
		$May_result = 0;
	}


	//january
	$Ju_first = strtotime('First day of june');
	$Ju_last = strtotime('last day of june');
	$Ju_start = date ("Y-m-d",$Ju_first);
	$Ju_end = date ("Y-m-d",$Ju_last);

	$Ju_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Ju_start' AND '$Ju_end'";

	$Ju_stmt=$pdo->prepare($Ju_sql);
	$Ju_stmt->execute();
	$Ju_resultdata= $Ju_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $Ju_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Ju_resultdata)
	{
		$Ju_result = $Ju_resultdata['total'];
	}
	else
	{
		$Ju_result = 0;
	}

	//january
	$Jl_first = strtotime('First day of july');
	$Jl_last = strtotime('last day of july');
	$Jl_start = date ("Y-m-d",$Jan_first);
	$Jl_end = date ("Y-m-d",$Jan_last);

	$Jl_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Jl_start' AND '$Jl_end'";

	$Jl_stmt=$pdo->prepare($Jl_sql);
	$Jl_stmt->execute();
	$Jl_resultdata= $Jl_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $Jl_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Jl_resultdata)
	{
		$Jl_result = $Jl_resultdata['total'];
	}
	else
	{
		$Jl_result = 0;
	}

	//january
	$Ar_first = strtotime('First day of august');
	$Ar_last = strtotime('last day of august');
	$Ar_start = date ("Y-m-d",$Ar_first);
	$Ar_end = date ("Y-m-d",$Ar_last);

	$Ar_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$Ar_start' AND '$Ar_end'";

	$Ar_stmt=$pdo->prepare($Ar_sql);
	$Ar_stmt->execute();
	$Ar_resultdata= $Ar_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $Ar_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($Ar_resultdata)
	{
		$Ar_result = $Ar_resultdata['total'];
	}
	else
	{
		$Ar_result = 0;
	}

	//january
	$S_first = strtotime('First day of september');
	$S_last = strtotime('last day of september');
	$S_start = date ("Y-m-d",$S_first);
	$S_end = date ("Y-m-d",$S_last);

	$S_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$S_start' AND '$S_end'";

	$S_stmt=$pdo->prepare($S_sql);
	$S_stmt->execute();
	$S_resultdata= $S_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $S_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($S_resultdata)
	{
		$S_result = $S_resultdata['total'];
	}
	else
	{
		$S_result = 0;
	}

	//january
	$O_first = strtotime('First day of october');
	$O_last = strtotime('last day of october');
	$O_start = date ("Y-m-d",$O_first);
	$O_end = date ("Y-m-d",$O_last);

	$O_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$O_start' AND '$O_end'";

	$O_stmt=$pdo->prepare($O_sql);
	$O_stmt->execute();
	$O_resultdata= $O_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $O_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($O_resultdata)
	{
		$O_result = $O_resultdata['total'];
	}
	else
	{
		$O_result = 0;
	}


	$N_first = strtotime('First day of november');
	$N_last = strtotime('last day of noember');
	$N_start = date ("Y-m-d",$N_first);
	$N_end = date ("Y-m-d",$N_last);

	$N_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$N_start' AND '$N_end'";

	$N_stmt=$pdo->prepare($N_sql);
	$N_stmt->execute();
	$N_resultdata= $N_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $N_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($N_resultdata)
	{
		$N_result = $N_resultdata['total'];
	}
	else
	{
		$N_result = 0;
	}

	$D_first = strtotime('First day of december');
	$D_last = strtotime('last day of december');
	$D_start = date ("Y-m-d",$D_first);
	$D_end = date ("Y-m-d",$D_last);

	$D_sql= "SELECT COALESCE(SUM(total),0) AS total FROM orders WHERE orderdate between '$D_start' AND '$D_end'";

	$D_stmt=$pdo->prepare($D_sql);
	$D_stmt->execute();
	$D_resultdata= $D_stmt->fetch(PDO::FETCH_ASSOC);

	//echo $D_resultdata['total']."<br>";

	//echo $Jan_start."<br>";
	//echo $Jan_end."<br>";

	if($D_resultdata)
	{
		$D_result = $D_resultdata['total'];
	}
	else
	{
		$D_result = 0;
	}


	$total = array (
		$Jan_result,$Feb_result,$May_result,$Ju_result
		,$Jl_result,$Ar_result,$S_result,$O_result,$N_result,$D_result
	);

	//var_dump( $total);

	echo json_encode($total);


?>