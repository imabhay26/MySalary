<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=16";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb16=$row["pipb"];
			$gp16=$row["gp"];
			//$bp1=$row["bp"];
			$bp16=$pipb16 + $gp16;
			$da16=$bp16*1.54;
			$sp16=$row["sp"];
			$arr16=$row["arr"];
			$othr16=$row["othr"];
			$joining16=$row["joining"];
			$gross16=$bp16 + $da16 + $sp16 + $arr16 + $othr16 ;
			
			
			$gpf16=$row["gpf"];
			$hr16=$row["hr"];
			$elect16=$row["elect"];
			$incm16=$row["incm"];
			$pol16=$row["pol"];
			$othr_d16=$row["othr_d"];
			$total16=$gpf16 + $hr16 + $elect16 + $incm16 + $pol16 + $othr_d16 ;
			$rmrk16=$row["rmrk"];
			$fnl_sal16=$row["gross"] - $total16;
			
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
<h2>MR. ASHISH SRIVASTAV</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>16</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb16 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp16 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp16 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da16 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp16 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr16 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr16 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross16 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf16 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr16 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect16 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm16 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol16 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d16 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total16 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal16 ?></th>
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