<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=14";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb14=$row["pipb"];
			$gp14=$row["gp"];
			//$bp1=$row["bp"];
			$bp14=$pipb14 + $gp14;
			$da14=$bp14*1.54;
			$sp14=$row["sp"];
			$arr14=$row["arr"];
			$othr14=$row["othr"];
			$joining14=$row["joining"];
			$gross14=$bp14 + $da14 + $sp14 + $arr14 + $othr14 ;
			
			
			$gpf14=$row["gpf"];
			$hr14=$row["hr"];
			$elect14=$row["elect"];
			$incm14=$row["incm"];
			$pol14=$row["pol"];
			$othr_d14=$row["othr_d"];
			$total14=$gpf14 + $hr14 + $elect14 + $incm14 + $pol14 + $othr_d14 ;
			$rmrk14=$row["rmrk"];
			$fnl_sal14=$row["gross"] - $total14;
			
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
<h2>MR. MOHD. TAUSEEF KHAN</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>14</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb14 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp14 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp14 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da14 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp14 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr14 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr14 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross14 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf14 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr14 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect14 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm14 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol14 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d14 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total14 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal14 ?></th>
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