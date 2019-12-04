<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=28";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb1=$row["pipb"];
			$gp1=$row["gp"];
			//$bp1=$row["bp"];
			$bp1=$pipb1 + $gp1;
			$da1=$bp1*1.54;
			$sp1=$row["sp"];
			$arr1=$row["arr"];
			$othr1=$row["othr"];
			$joining1=$row["joining"];
			$gross1=$bp1 + $da1 + $sp1 + $arr1 + $othr1 ;
			
			
			$gpf1=$row["gpf"];
			$hr1=$row["hr"];
			$elect1=$row["elect"];
			$incm1=$row["incm"];
			$pol1=$row["pol"];
			$othr_d1=$row["othr_d"];
			$total1=$gpf1 + $hr1 + $elect1 + $incm1 + $pol1 + $othr_d1 ;
			$rmrk1=$row["rmrk"];
			$fnl_sal1=$row["gross"] - $total1;
			
		}

		
		
?>

<!DOCTYPE HTML>

<html>
<head>
    <style>
        table,tr,td{
            border: 1px solid lightblue;
            border-collapse: collapse;
        }
    </style>
</head>

<body style="font-family: Verdana">
<center>
<h2>DR. SHEO PRASAD SHUKLA</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>28</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb1 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp1 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp1 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da1 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp1 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr1 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr1 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross1 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf1 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr1 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect1 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm1 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol1 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d1 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total1 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal1 ?></th>
    </tr>
</table>
<br>
<button onclick="fun()" style="padding: 5px 20px 5px 20px">PRINT</button>

<br><br>
<a href="deduct.php">Back to previous page</a>
</center>


<script>
    function fun() {
        print(window);
    }
</script>
</body>
</html>