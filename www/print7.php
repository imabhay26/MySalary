<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=7";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb7=$row["pipb"];
			$gp7=$row["gp"];
			//$bp1=$row["bp"];
			$bp7=$pipb7 + $gp7;
			$da7=$bp7*1.54;
			$sp7=$row["sp"];
			$arr7=$row["arr"];
			$othr7=$row["othr"];
			$joining7=$row["joining"];
			$gross7=$bp7 + $da7 + $sp7 + $arr7 + $othr7 ;
			
			
			$gpf7=$row["gpf"];
			$hr7=$row["hr"];
			$elect7=$row["elect"];
			$incm7=$row["incm"];
			$pol7=$row["pol"];
			$othr_d7=$row["othr_d"];
			$total7=$gpf7 + $hr7 + $elect7 + $incm7 + $pol7 + $othr_d7 ;
			$rmrk7=$row["rmrk"];
			$fnl_sal7=$row["gross"] - $total7;
			
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
<h2>MR. AKSHAYKANT</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>07</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb7 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp7 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp7 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da7 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp7 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr7 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr7 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross7 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf7 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr7 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect7 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm7 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol7 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d7 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total7 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal7 ?></th>
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