<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=11";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb11=$row["pipb"];
			$gp11=$row["gp"];
			//$bp1=$row["bp"];
			$bp11=$pipb11 + $gp11;
			$da11=$bp11*1.54;
			$sp11=$row["sp"];
			$arr11=$row["arr"];
			$othr11=$row["othr"];
			$joining11=$row["joining"];
			$gross11=$bp11 + $da11 + $sp11 + $arr11 + $othr11 ;
			
			
			$gpf11=$row["gpf"];
			$hr11=$row["hr"];
			$elect11=$row["elect"];
			$incm11=$row["incm"];
			$pol11=$row["pol"];
			$othr_d11=$row["othr_d"];
			$total11=$gpf11+ $hr11 + $elect11 + $incm11 + $pol11 + $othr_d11 ;
			$rmrk11=$row["rmrk"];
			$fnl_sal11=$row["gross"] - $total11;
			
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
<h2>MR. ARUN KUMAR</h2>
<table style="width:400px;">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>10</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb11 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp11 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp11 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da11 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp11 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr11 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr11 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross11 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf11 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr11 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect11 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm11 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol10 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d11 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total11 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal11 ?></th>
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