<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=18";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb18=$row["pipb"];
			$gp18=$row["gp"];
			//$bp1=$row["bp"];
			$bp18=$pipb18 + $gp18;
			$da18=$bp18*1.54;
			$sp18=$row["sp"];
			$arr18=$row["arr"];
			$othr18=$row["othr"];
			$joining18=$row["joining"];
			$gross18=$bp18 + $da18 + $sp18 + $arr18 + $othr18 ;
			
			
			$gpf18=$row["gpf"];
			$hr18=$row["hr"];
			$elect18=$row["elect"];
			$incm18=$row["incm"];
			$pol18=$row["pol"];
			$othr_d18=$row["othr_d"];
			$total18=$gpf18 + $hr18 + $elect18 + $incm18 + $pol18 + $othr_d18 ;
			$rmrk18=$row["rmrk"];
			$fnl_sal18=$row["gross"] - $total18;
			
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
<h2>MR. SARVESH KUMAR</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>18</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb18 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp18 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp18 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da18 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp18 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr18 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr18 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross18 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf18 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr18 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect18 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm18 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol18 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d18 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total18 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal18 ?></th>
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