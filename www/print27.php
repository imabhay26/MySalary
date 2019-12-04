<?php


		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=27";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb27=$row["pipb"];
			$gp27=$row["gp"];
			//$bp1=$row["bp"];
			$bp27=$pipb27 + $gp27;
			$da27=$bp27*1.54;
			$sp27=$row["sp"];
			$arr27=$row["arr"];
			$othr27=$row["othr"];
			$joining27=$row["joining"];
			$gross27=$bp27 + $da27 + $sp27 + $arr27 + $othr27 ;
			
			
			$gpf27=$row["gpf"];
			$hr27=$row["hr"];
			$elect27=$row["elect"];
			$incm27=$row["incm"];
			$pol27=$row["pol"];
			$othr_d27=$row["othr_d"];
			$total27=$gpf27 + $hr27 + $elect27 + $incm27 + $pol27 + $othr_d27 ;
			$rmrk27=$row["rmrk"];
			$fnl_sal27=$row["gross"] - $total27;
			
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
<h2>DR. POOJA SINGH</h2>
<table style="width:400px;text-ali">

    <tr>
        <th colspan="2" style="padding: 10px">EARNINGS</th>
    </tr>
    <tr>
        <td>REF.NO.</td>
        <td>27</td>
    </tr>
    <tr>
        <td>PAY IN PAY BAND</td>
        <td><?php echo $pipb27 ?></td>
    </tr>
    <tr>
        <td>G.P.</td>
        <td><?php echo $gp27 ?></td>
    </tr>
    <tr>
        <td>BASIC PAY</td>
        <td><?php echo $bp27 ?></td>
    </tr>
    <tr>
        <td>DA(154%)</td>
        <td><?php echo $da27 ?></td>
    </tr>
    <tr>
        <td>SPL.PAY</td>
        <td><?php echo $sp27 ?></td>
    </tr>
    <tr>
        <td>ARREARS</td>
        <td><?php echo $arr27 ?></td>
    </tr>
    <tr>
        <td>OTHER ALL(IF ANY)</td>
        <td><?php echo $othr27 ?></td>
    </tr>
    <tr>
        <td>GROSS</td>
        <td><?php echo $gross27 ?></td>
    </tr>

    <tr>
        <th colspan="2" style="padding: 10px">DEDUCTION</th>
    </tr>
    <tr>
        <td>G.P.F.</td>
        <td><?php echo $gpf27 ?></td>
    </tr>
    <tr>
        <td>H.R.</td>
        <td><?php echo $hr27 ?></td>
    </tr>
    <tr>
        <td>ELECT.</td>
        <td><?php echo $elect27 ?></td>
    </tr>
    <tr>
        <td>INCOME TAX</td>
        <td><?php echo $incm27 ?></td>
    </tr>
    <tr>
        <td>P.O.L.</td>
        <td><?php echo $pol27 ?></td>
    </tr>
    <tr>
        <td>OTHER DED. IF ANY</td>
        <td><?php echo $othr_d27 ?></td>
    </tr>
    <tr>
        <td>TOTAL DEDUCT</td>
        <td><?php echo $total27 ?></td>
    </tr>
    <tr>
        <th colspan="2" style="padding: 10px">NET PAY = <?php echo $fnl_sal27 ?></th>
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