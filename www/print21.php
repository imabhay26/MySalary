<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=21";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb21=$row["pipb"];
			$gp21=$row["gp"];
			//$bp1=$row["bp"];
			$bp21=$pipb21 + $gp21;
			$da21=$bp21*1.54;
			$sp21=$row["sp"];
			$arr21=$row["arr"];
			$othr21=$row["othr"];
			$joining21=$row["joining"];
			$gross21=$bp21 + $da21 + $sp21 + $arr21 + $othr21 ;
			
			
			$gpf21=$row["gpf"];
			$hr21=$row["hr"];
			$elect21=$row["elect"];
			$incm21=$row["incm"];
			$pol21=$row["pol"];
			$othr_d21=$row["othr_d"];
			$total21=$gpf21 + $hr21 + $elect21 + $incm21 + $pol21 + $othr_d21 ;
			$rmrk21=$row["rmrk"];
			$fnl_sal21=$row["gross"] - $total21;
			
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
<h2>MR. SHAILENDRA BADAL</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>21</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb21 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp21 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp21 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da21 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp21 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr21 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr21 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross21 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf21 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr21 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect21 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm21 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol21 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d21 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total21 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal21 ?></th>
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