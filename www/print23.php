<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=23";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb23=$row["pipb"];
			$gp23=$row["gp"];
			//$bp1=$row["bp"];
			$bp23=$pipb23 + $gp23;
			$da23=$bp23*1.54;
			$sp23=$row["sp"];
			$arr23=$row["arr"];
			$othr23=$row["othr"];
			$joining23=$row["joining"];
			$gross23=$bp23 + $da23 + $sp23 + $arr23 + $othr23 ;
			
			$gpf23=$row["gpf"];
			$hr23=$row["hr"];
			$elect23=$row["elect"];
			$incm23=$row["incm"];
			$pol23=$row["pol"];
			$othr_d23=$row["othr_d"];
			$total23=$gpf23 + $hr23 + $elect23 + $incm23 + $pol23 + $othr_d23 ;
			$rmrk23=$row["rmrk"];
			$fnl_sal23=$row["gross"] - $total23;
			
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
<h2>MR. SURENDRA KUMAR</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>23</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb23 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp23 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp23 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da23 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp23 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr23 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr23 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross23 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf23 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr23 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect23 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm23 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol23 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d23 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total23 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal23 ?></th>
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