<?php
	class MyDB extends SQLite3{
		function __construct(){
			$this->open('realdb.db');
		}
	}
	$db = new MyDB();
		$refno = (isset($_POST['refno']) ? $_POST['refno'] : '');
		$pspb = (isset($_POST['pspb']) ? $_POST['pspb'] : '');
		$pipb = (isset($_POST['pipb']) ? $_POST['pipb'] : '');
		$gp = (isset($_POST['gp']) ? $_POST['gp'] : '');
		$bp = (isset($_POST['bp']) ? $_POST['bp'] : '');
		$sp = (isset($_POST['sp']) ? $_POST['sp'] : '');
		$arr = (isset($_POST['arr']) ? $_POST['arr'] : '');
		$othr = (isset($_POST['othr']) ? $_POST['othr'] : '');
		$joining = (isset($_POST['joining']) ? $_POST['joining'] : '');
		
		
		
	
		//$pspb=$_POST['pspb'];
		//$pipb=$_POST['pipb'];
		//$gp=$_POST['gp'];
		//$bp=$_POST['bp'];
		//$sp=$_POST['sp'];
		//$arr=$_POST['arr'];
		//$othr=$_POST['othr'];
		//$sql = "INSERT INTO mySalary (email,password,fullname) VALUES ('abhaypc26@gmail.com' ,  'Abhay@12345' ,  'Abhay Gupta')";
		
		$sql= "UPDATE datafield SET refno='$refno' , pspb='$pspb' , pipb='$pipb' ,gp='$gp' ,bp='$bp' , sp='$sp' ,
									arr='$arr',othr='$othr' , joining='$joining' WHERE refno='$refno' ";
		$db->exec($sql);
		
		
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
			$sql= "UPDATE datafield SET gross='$gross1' , bp='$bp1' , da='$da1'  WHERE refno=28 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=2";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb2=$row["pipb"];
			$gp2=$row["gp"];
			//$bp1=$row["bp"];
			$bp2=$pipb2 + $gp2;
			$da2=$bp2*1.54;
			$sp2=$row["sp"];
			$arr2=$row["arr"];
			$othr2=$row["othr"];
			$joining2=$row["joining"];
			$gross2=$bp2 + $da2 + $sp2 + $arr2 + $othr2 ;
			$sql= "UPDATE datafield SET gross='$gross2' , bp='$bp2' , da='$da2'  WHERE refno=2 ";
			$db->exec($sql);
		}
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=3";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb3=$row["pipb"];
			$gp3=$row["gp"];
			//$bp1=$row["bp"];
			$bp3=$pipb3 + $gp3;
			$da3=$bp3*1.54;
			$sp3=$row["sp"];
			$arr3=$row["arr"];
			$othr3=$row["othr"];
			$joining3=$row["joining"];
			$gross3=$bp3 + $da3 + $sp3 + $arr3 + $othr3 ;
			$sql= "UPDATE datafield SET gross='$gross3' , bp='$bp3' , da='$da3'  WHERE refno=3 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=4";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb4=$row["pipb"];
			$gp4=$row["gp"];
			//$bp1=$row["bp"];
			$bp4=$pipb4 + $gp4;
			$da4=$bp4*1.54;
			$sp4=$row["sp"];
			$arr4=$row["arr"];
			$othr4=$row["othr"];
			$joining4=$row["joining"];
			$gross4=$bp4 + $da4 + $sp4 + $arr4 + $othr4 ;
			$sql= "UPDATE datafield SET gross='$gross4' , bp='$bp4' , da='$da4'  WHERE refno=4 ";
			$db->exec($sql);
		}
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=5";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb5=$row["pipb"];
			$gp5=$row["gp"];
			//$bp1=$row["bp"];
			$bp5=$pipb5 + $gp5;
			$da5=$bp5*1.54;
			$sp5=$row["sp"];
			$arr5=$row["arr"];
			$othr5=$row["othr"];
			$joining5=$row["joining"];
			$gross5=$bp5 + $da5 + $sp5 + $arr5 + $othr5 ;
			$sql= "UPDATE datafield SET gross='$gross5' , bp='$bp5' , da='$da5'  WHERE refno=5 ";
			$db->exec($sql);
		}
		
		
		
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
			$sql= "UPDATE datafield SET gross='$gross7' , bp='$bp7' , da='$da7'  WHERE refno=7 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=8";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb8=$row["pipb"];
			$gp8=$row["gp"];
			//$bp1=$row["bp"];
			$bp8=$pipb8 + $gp8;
			$da8=$bp8*1.54;
			$sp8=$row["sp"];
			$arr8=$row["arr"];
			$othr8=$row["othr"];
			$joining8=$row["joining"];
			$gross8=$bp8 + $da8 + $sp8 + $arr8 + $othr8 ;
			$sql= "UPDATE datafield SET gross='$gross8' , bp='$bp8' , da='$da8'  WHERE refno=8 ";
			$db->exec($sql);
		}
		
		
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=10";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb10=$row["pipb"];
			$gp10=$row["gp"];
			//$bp1=$row["bp"];
			$bp10=$pipb10 + $gp10;
			$da10=$bp10*1.54;
			$sp10=$row["sp"];
			$arr10=$row["arr"];
			$othr10=$row["othr"];
			$joining10=$row["joining"];
			$gross10=$bp10 + $da10 + $sp10 + $arr10 + $othr10 ;
			$sql= "UPDATE datafield SET gross='$gross10' , bp='$bp10' , da='$da10'  WHERE refno=10 ";
			$db->exec($sql);
		}
		
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
			$sql= "UPDATE datafield SET gross='$gross11' , bp='$bp11' , da='$da11'  WHERE refno=11 ";
			$db->exec($sql);
		}
			
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=12";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb12=$row["pipb"];
			$gp12=$row["gp"];
			//$bp1=$row["bp"];
			$bp12=$pipb12 + $gp12;
			$da12=$bp12*1.54;
			$sp12=$row["sp"];
			$arr12=$row["arr"];
			$othr12=$row["othr"];
			$joining12=$row["joining"];
			$gross12=$bp12 + $da12 + $sp12 + $arr12 + $othr12 ;
			$sql= "UPDATE datafield SET gross='$gross12' , bp='$bp12' , da='$da12'  WHERE refno=12 ";
			$db->exec($sql);
		}	
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=13";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb13=$row["pipb"];
			$gp13=$row["gp"];
			//$bp1=$row["bp"];
			$bp13=$pipb13 + $gp13;
			$da13=$bp13*1.54;
			$sp13=$row["sp"];
			$arr13=$row["arr"];
			$othr13=$row["othr"];
			$joining13=$row["joining"];
			$gross13=$bp13 + $da13 + $sp13 + $arr13 + $othr13 ;
			$sql= "UPDATE datafield SET gross='$gross13' , bp='$bp13' , da='$da13'  WHERE refno=13 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross14' , bp='$bp14' , da='$da14'  WHERE refno=14 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=15";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb15=$row["pipb"];
			$gp15=$row["gp"];
			//$bp1=$row["bp"];
			$bp15=$pipb15 + $gp15;
			$da15=$bp15*1.54;
			$sp15=$row["sp"];
			$arr15=$row["arr"];
			$othr15=$row["othr"];
			$joining15=$row["joining"];
			$gross15=$bp15 + $da15 + $sp15 + $arr15 + $othr15 ;
			$sql= "UPDATE datafield SET gross='$gross15' , bp='$bp15' , da='$da15'  WHERE refno=15 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross16' , bp='$bp16' , da='$da16'  WHERE refno=16 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=17";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb17=$row["pipb"];
			$gp17=$row["gp"];
			//$bp1=$row["bp"];
			$bp17=$pipb17 + $gp17;
			$da17=$bp17*1.54;
			$sp17=$row["sp"];
			$arr17=$row["arr"];
			$othr17=$row["othr"];
			$joining17=$row["joining"];
			$gross17=$bp17 + $da17 + $sp17 + $arr17 + $othr17 ;
			$sql= "UPDATE datafield SET gross='$gross17' , bp='$bp17' , da='$da17'  WHERE refno=17 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross18' , bp='$bp18' , da='$da18'  WHERE refno=18 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=19";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb19=$row["pipb"];
			$gp19=$row["gp"];
			//$bp1=$row["bp"];
			$bp19=$pipb19 + $gp19;
			$da19=$bp19*1.54;
			$sp19=$row["sp"];
			$arr19=$row["arr"];
			$othr19=$row["othr"];
			$joining19=$row["joining"];
			$gross19=$bp19 + $da19 + $sp19 + $arr19 + $othr19 ;
			$sql= "UPDATE datafield SET gross='$gross19' , bp='$bp19' , da='$da19'  WHERE refno=19 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=20";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb20=$row["pipb"];
			$gp20=$row["gp"];
			//$bp1=$row["bp"];
			$bp20=$pipb20 + $gp20;
			$da20=$bp20*1.54;
			$sp20=$row["sp"];
			$arr20=$row["arr"];
			$othr20=$row["othr"];
			$joining20=$row["joining"];
			$gross20=$bp20 + $da20 + $sp20 + $arr20 + $othr20 ;
			$sql= "UPDATE datafield SET gross='$gross20' , bp='$bp20' , da='$da20'  WHERE refno=20 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross21' , bp='$bp21' , da='$da21'  WHERE refno=21 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=22";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb22=$row["pipb"];
			$gp22=$row["gp"];
			//$bp1=$row["bp"];
			$bp22=$pipb22 + $gp22;
			$da22=$bp3*1.54;
			$sp22=$row["sp"];
			$arr22=$row["arr"];
			$othr22=$row["othr"];
			$joining22=$row["joining"];
			$gross22=$bp22 + $da22 + $sp22 + $arr22 + $othr22 ;
			$sql= "UPDATE datafield SET gross='$gross22' , bp='$bp22' , da='$da22'  WHERE refno=22 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross23' , bp='$bp23' , da='$da23'  WHERE refno=23 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=24";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb24=$row["pipb"];
			$gp24=$row["gp"];
			//$bp1=$row["bp"];
			$bp24=$pipb24 + $gp24;
			$da24=$bp24*1.54;
			$sp24=$row["sp"];
			$arr24=$row["arr"];
			$othr24=$row["othr"];
			$joining24=$row["joining"];
			$gross24=$bp24 + $da24 + $sp24 + $arr24 + $othr24 ;
			$sql= "UPDATE datafield SET gross='$gross24' , bp='$bp24' , da='$da24'  WHERE refno=24 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=25";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb25=$row["pipb"];
			$gp25=$row["gp"];
			//$bp1=$row["bp"];
			$bp25=$pipb25 + $gp25;
			$da25=$bp25*1.54;
			$sp25=$row["sp"];
			$arr25=$row["arr"];
			$othr25=$row["othr"];
			$joining25=$row["joining"];
			$gross25=$bp25 + $da25 + $sp25 + $arr25 + $othr25 ;
			$sql= "UPDATE datafield SET gross='$gross25' , bp='$bp25' , da='$da25'  WHERE refno=25 ";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=26";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb26=$row["pipb"];
			$gp26=$row["gp"];
			//$bp1=$row["bp"];
			$bp26=$pipb26 + $gp26;
			$da26=$bp26*1.54;
			$sp26=$row["sp"];
			$arr26=$row["arr"];
			$othr26=$row["othr"];
			$joining26=$row["joining"];
			$gross26=$bp26 + $da26 + $sp26 + $arr26 + $othr26 ;
			$sql= "UPDATE datafield SET gross='$gross26' , bp='$bp26' , da='$da26'  WHERE refno=26 ";
			$db->exec($sql);
		}
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
			$sql= "UPDATE datafield SET gross='$gross27' , bp='$bp27' , da='$da27'  WHERE refno=27 ";
			$db->exec($sql);
		}
		//"pipb: " . $row["pipb"]."gp:" .$row["gp"]. "bp:" .$row["bp"]. "sp:" .$row["sp"] ."arr:" .$row["arr"] . "othr:" .$row["othr"] . "<br>";
		
		
	
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="shortcut icon" href="img/logo.png">
	

    <style >
        table,tr,td{
            border: 1px solid lightblue;
        }
        
        @media print {
            @page {
                size: 450mm 210mm; /* landscape */               
                margin: 25mm;
            }
        }
		
		
		/*@media print{@page {size: landscape}}*/
		
        th{
            padding: 0 12px 0 12px;
            font-weight: bold;
            font-size: 22px;
        }
        table,tbody,td{
            text-align: center;
            font-size: 16px;
        }
		a{
			outline:none;
			border:none;
		}
		.page    { display: none; padding: 0 0.5em; }


#loading {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100vw;
  height: 100vh;
  
  background-image: url("img/load.gif");
  background-repeat: no-repeat;
  background-position: center;
}
		
    </style>
</head>
<body style="width: 2070px;margin-top: 20px;font-family: Verdana;margin: 15px">
<div class="page">
<div style="margin: 0 0 0 -700px;text-align: center">

    <h3 class="font-weight-bold">RAJKIYA ENGINEERING COLLEGE BANDA</h3>
    <h4 class="font-weight-bold">PAY ROLL - EARNINGS</h4>
	<h6 class="font-weight-bold">(FOR PAY ROLL - DEDUCTION <a href="deduct.php">CLICK HERE</a>)</h6>
    <p class="font-weight-bold ml-3"><span>DATE : </span><span id="demo"></span>/<span id="demo1">
    </span>/<span id="demo2"></span></p>
    <img src="img/logo.png" height="80" width="80" style="margin-top: -150px">
    <button class="btn btn-danger" style="margin: -150px 0 0 1000px" onclick="main()">Print</button></p>

</div>




<div style="margin-top:-40px">
    <table class="table-bordered table-hover">
        <thead class="bg-primary text-white text-center ">
            <th class="font-weight-bold">S.No.</th>
            <th class="font-weight-bold">REF.NO.</th>
            <th class="font-weight-bold " style="padding: 0 70px 0 70px">NAME OF EMPLOYEE</th>
            <th class="font-weight-bold">DESIGNATION</th>
            <th class="font-weight-bold">DATE OF JOINING</th>
            <th class="font-weight-bold"> DETE INCR.</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">PAY SCALE/PAY BAND</th>
            <th class="font-weight-bold">PAY IN PAY BAND</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">G.P.</th>
            <th class="font-weight-bold">BASIC PAY</th>
            <th class="font-weight-bold">CCA</th>
            <th class="font-weight-bold">DA(154%)</th>
            <th class="font-weight-bold">H.R.A.</th>
            <th class="font-weight-bold">SPL.PAY</th>
            <th class="font-weight-bold">INS CONT</th>
            <th class="font-weight-bold">INS ARR.</th>
            <th class="font-weight-bold">BONUS </th>
            <th class="font-weight-bold">ARREARS</th>
            <th class="font-weight-bold">SALARY DED.</th>
            <th class="font-weight-bold">S-R</th>
            <th class="font-weight-bold">OTHER ALL(IF ANY)</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">GROSS</th>
        </thead>
        <tbody>
            <tr>
                <th class="font-weight-bold">01</th>
                <td>28</td>
                <td class="text-left">
                    <a  href="#" data-toggle="modal" data-target="#spshukla" >
                    DR. SHEO PRASAD SHUKLA</a>
                </td>

                <td>DIRECTOR</td>
                <td>20-01-2018</td>
                <td id="spdete"><?php  echo $joining1 ?></td>
                <td>37400-67000</td>
                <td><?php  echo $pipb1 ?></td>
                <td><?php  echo $gp1 ?></td>
                <td><?php  echo $bp1 ?></td>
                <td>0-00</td>
                <td><?php echo $da1 ?></td>
                <td>0-00</td>
                <td><?php echo $sp1 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr1 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr1 ?></td>
                <td><?php echo $gross1 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">02</th>
                <td>02</td>
                <td class="text-left">
					<a  href="#" data-toggle="modal" data-target="#spshukla" >DR. VIBHASH YADAV</a>
					</td>
                <td>ASSO. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining2 ?></td>
                <td>37400-67000</td>
				<td><?php  echo $pipb2 ?></td>
                <td><?php  echo $gp2 ?></td>
                <td><?php  echo $bp2 ?></td>
                <td>0-00</td>
                <td><?php echo $da2 ?></td>
                <td>0-00</td>
                <td><?php echo $sp2 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr2 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr2 ?></td>
                <td><?php echo $gross2 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">03</th>
                <td>03</td>
                <td class="text-left">
				<a  href="#" data-toggle="modal" data-target="#spshukla" >DR. SIDDHARTHA ARJARIA</a>
				</td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining3 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb3 ?></td>
                <td><?php  echo $gp3 ?></td>
                <td><?php  echo $bp3 ?></td>
                <td>0-00</td>
                <td><?php echo $da3 ?></td>
                <td>0-00</td>
                <td><?php echo $sp3 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr3 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr3 ?></td>
                
                <td><?php echo $gross3 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">04</th>
                <td>04</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SAURABH TRIPATHI</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining4 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb4 ?></td>
                <td><?php  echo $gp4 ?></td>
                <td><?php  echo $bp4 ?></td>
                <td>0-00</td>
                <td><?php echo $da4 ?></td>
                <td>0-00</td>
                <td><?php echo $sp4 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr4 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr4 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross4 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">05</th>
                <td>05</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANKUSH KUMAR RAJPOOT</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining5 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb5 ?></td>
                <td><?php  echo $gp5 ?></td>
                <td><?php  echo $bp5 ?></td>
                <td>0-00</td>
                <td><?php echo $da5 ?></td>
                <td>0-00</td>
                <td><?php echo $sp5 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr5 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr5 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross5 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">06</th>
                <td>07</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AKSHAYKANT</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining7 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb7 ?></td>
                <td><?php  echo $gp7 ?></td>
                <td><?php  echo $bp7 ?></td>
                <td>0-00</td>
                <td><?php echo $da7 ?></td>
                <td>0-00</td>
                <td><?php echo $sp7 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr7 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr7 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross7 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">07</th>
                <td>08</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. RAVI SHANKAR</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining8 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb8 ?></td>
                <td><?php  echo $gp8 ?></td>
                <td><?php  echo $bp8 ?></td>
                <td>0-00</td>
                <td><?php echo $da8 ?></td>
                <td>0-00</td>
                <td><?php echo $sp8 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr8 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr8 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross8 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">08</th>
                <td>10</td>
                <td class="text-left">
				<a  href="#" data-toggle="modal" data-target="#spshukla">MR. DEEP SINGH THAKUR</a>
				</td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining10 ?></td>
				<td>15600-39100</td>
				<td><?php  echo $pipb10 ?></td>
                <td><?php  echo $gp10 ?></td>
                <td><?php  echo $bp10 ?></td>
                <td>0-00</td>
                <td><?php echo $da10 ?></td>
                <td>0-00</td>
                <td><?php echo $sp10 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr10 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr10 ?></td>
                <!--
                <td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>1335-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross10 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">09</th>
                <td>11</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ARUN KUMAR</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining11 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb11 ?></td>
                <td><?php  echo $gp11 ?></td>
                <td><?php  echo $bp11 ?></td>
                <td>0-00</td>
                <td><?php echo $da11 ?></td>
                <td>0-00</td>
                <td><?php echo $sp11 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr11 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr11 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross11 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">10</th>
                <td>12</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. PUSHPENDRA SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining12 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb12 ?></td>
                <td><?php  echo $gp12 ?></td>
                <td><?php  echo $bp12 ?></td>
                <td>0-00</td>
                <td><?php echo $da12 ?></td>
                <td>0-00</td>
                <td><?php echo $sp12 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr12 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr12 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross12 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">11</th>
                <td>13</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANURAG CHAUHAN</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining13 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb13 ?></td>
                <td><?php  echo $gp13 ?></td>
                <td><?php  echo $bp13 ?></td>
                <td>0-00</td>
                <td><?php echo $da13 ?></td>
                <td>0-00</td>
                <td><?php echo $sp13 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr13 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr13 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross13 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">12</th>
                <td>14</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MOHD. TAUSEEF KHAN</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining14 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb14 ?></td>
                <td><?php  echo $gp14 ?></td>
                <td><?php  echo $bp14 ?></td>
                <td>0-00</td>
                <td><?php echo $da14 ?></td>
                <td>0-00</td>
                <td><?php echo $sp14 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr14 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr14 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross14 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">13</th>
                <td>15</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH TRIPATHI</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining15 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb15 ?></td>
                <td><?php  echo $gp15 ?></td>
                <td><?php  echo $bp15 ?></td>
                <td>0-00</td>
                <td><?php echo $da15 ?></td>
                <td>0-00</td>
                <td><?php echo $sp15 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr15 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr15 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross15 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">14</th>
                <td>16</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH SRIVASTAV</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining16 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb16 ?></td>
                <td><?php  echo $gp16 ?></td>
                <td><?php  echo $bp16 ?></td>
                <td>0-00</td>
                <td><?php echo $da16 ?></td>
                <td>0-00</td>
                <td><?php echo $sp16 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr16 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr16 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross16 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">15</th>
                <td>17</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. GURUSHARAN SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining17 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb17 ?></td>
                <td><?php  echo $gp17 ?></td>
                <td><?php  echo $bp17 ?></td>
                <td>0-00</td>
                <td><?php echo $da17 ?></td>
                <td>0-00</td>
                <td><?php echo $sp17 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr17 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr17 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross17 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">16</th>
                <td>18</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SARVESH KUMAR</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining18 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb18 ?></td>
                <td><?php  echo $gp18 ?></td>
                <td><?php  echo $bp18 ?></td>
                <td>0-00</td>
                <td><?php echo $da18 ?></td>
                <td>0-00</td>
                <td><?php echo $sp18 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr18 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr18 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross18 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">17</th>
                <td>19</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MRITYUNJAY SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining19 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb19 ?></td>
                <td><?php  echo $gp19 ?></td>
                <td><?php  echo $bp19 ?></td>
                <td>0-00</td>
                <td><?php echo $da19 ?></td>
                <td>0-00</td>
                <td><?php echo $sp19 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr19 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr19 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross19 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">18</th>
                <td>20</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ABHIJEET SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining20 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb20 ?></td>
                <td><?php  echo $gp20 ?></td>
                <td><?php  echo $bp20 ?></td>
                <td>0-00</td>
                <td><?php echo $da20 ?></td>
                <td>0-00</td>
                <td><?php echo $sp20 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr20 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr20 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross20 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">19</th>
                <td>21</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SHAILENDRA BADAL</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining21 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb21 ?></td>
                <td><?php  echo $gp21 ?></td>
                <td><?php  echo $bp21 ?></td>
                <td>0-00</td>
                <td><?php echo $da21 ?></td>
                <td>0-00</td>
                <td><?php echo $sp21 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr21 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr21 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross21 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">20</th>
                <td>22</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHUTOSH TIWARI</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining22 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb22 ?></td>
                <td><?php  echo $gp22 ?></td>
                <td><?php  echo $bp22 ?></td>
                <td>0-00</td>
                <td><?php echo $da22 ?></td>
                <td>0-00</td>
                <td><?php echo $sp22 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr22 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr22 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross22 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">21</th>
                <td>23</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SURENDRA KUMAR</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining23 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb23 ?></td>
                <td><?php  echo $gp23 ?></td>
                <td><?php  echo $bp23 ?></td>
                <td>0-00</td>
                <td><?php echo $da23 ?></td>
                <td>0-00</td>
                <td><?php echo $sp23 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr23 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr23 ?></td>
				<!--
                <td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross23 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">22</th>
                <td>24</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AMIT TRIPATHI</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining24 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb24 ?></td>
                <td><?php  echo $gp24 ?></td>
                <td><?php  echo $bp24 ?></td>
                <td>0-00</td>
                <td><?php echo $da24 ?></td>
                <td>0-00</td>
                <td><?php echo $sp24?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr24?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr24 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross24 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">23</th>
                <td>25</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MANOJ KUMAR SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining25 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb25 ?></td>
                <td><?php  echo $gp25 ?></td>
                <td><?php  echo $bp25 ?></td>
                <td>0-00</td>
                <td><?php echo $da25 ?></td>
                <td>0-00</td>
                <td><?php echo $sp25 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr25 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr25 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross25 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">24</th>
                <td>26</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. ARCHANA SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining26 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb26 ?></td>
                <td><?php  echo $gp26 ?></td>
                <td><?php  echo $bp26 ?></td>
                <td>0-00</td>
                <td><?php echo $da26 ?></td>
                <td>0-00</td>
                <td><?php echo $sp26 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr26 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr26 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross26 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">25</th>
                <td>27</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. POOJA SINGH</a></td>
                <td>ASSI. PROF</td>
                <td>08-12-17</td>
                <td><?php  echo $joining27 ?></td>
                <td>15600-39100</td>
				<td><?php  echo $pipb27 ?></td>
                <td><?php  echo $gp27 ?></td>
                <td><?php  echo $bp27 ?></td>
                <td>0-00</td>
                <td><?php echo $da27 ?></td>
                <td>0-00</td>
                <td><?php echo $sp27 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $arr27 ?></td>
                <td>0-00</td>
                <td>0-00</td>
                <td><?php echo $othr27 ?></td>
                <!--<td>16250</td>
                <td>6000-00</td>
                <td>22250-00</td>
                <td>0-00</td>
                <td>34265-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>2670-00</td>
                <td>0-00</td>
                <td>0-00</td>
                <td>0-00</td>-->
                <td><?php echo $gross27 ?></td>

            </tr>
        </tbody>
    </table>

</div>



<div class="modal fade" id="spshukla"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="text-center font-weight-bold" >Enter Details 
				<span style="font-size:12px">(Enter Ref.No for respective faculty)</span>
				</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
			<form name="frmRegistration" method="POST" action="">
                <table style="margin-left: 40px;border: 1px solid black">
                    <tr>
                        <td> Enter Ref. No.</td>
                        <td><input type="number" id="refno" name="refno"></td>
                    </tr>
					<tr>
                        <td>DETE INCR.</td>
                        <td>
                            <select id="joining" name="joining" >
								<option selected >Select One</option>
                                <option value="JULY">JULY</option>
                                <option value="JANUARY">JANUARY</option>
                            </select>
                        </td>
                    </tr>
                    <!--<tr>
                        <td> PAY SCALE/PAY BAND</td>
                        <td><input type="number" id="pspb" name="pspb"></td>
                    </tr>-->
                    <tr>
                        <td>PAY IN PAY BAND</td>
                        <td><input type="number" id="pipb" name="pipb"></td>
                    </tr>
                    <tr>
                        <td>GROSS PAY</td>
                        <td><input type="number" id="gp" name="gp"></td>
                    </tr>
                    <!--<tr>
                        <td>BASIC PAY</td>
                        <td><input type="number" id="bp" name="bp"> </td>
                    </tr>-->
                    <tr>
                        <td>SPL. PAY</td>
                        <td><input type="number" id="sp" name="sp"></td>
                    </tr>
                    <tr>
                        <td>ARREARS</td>
                        <td><input type="number" id="arr" name="arr"></td>
                    </tr>
                    <tr>
                        <td>OTHER ALL IF ANY</td>
                        <td><input type="number" id="othr" name="othr"></td>
                    </tr>


                </table>
				<button class="btn btn-info" style="margin-left: 190px" onclick="change()" type="submit" name="register-user" value="submit"  type="button ">Submit</button>
			</form>	
            </div>
            <!--<div class="modal-footer" >
                <button class="btn btn-primary" onclick="change()" >Submit</button>
                
            </div>-->
        </div>
    </div>
</div>

</div>


<div id="loading"></div>




<script>
    var d = new Date();
    document.getElementById("demo").innerHTML = d.getDate();
    var d = new Date();
    document.getElementById("demo1").innerHTML = (d.getMonth())+1;
    var d = new Date();
    document.getElementById("demo2").innerHTML = d.getFullYear();

    function main() {
        print(window);
    }
</script>
<script>
    function change() {

        var e = document.getElementById("spdete_f");
        var strUser = e.options[e.selectedIndex].text;
        document.getElementById('spdete').innerHTML = strUser;
        alert("Details inserted successfully")
    }
</script>

<script>
function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('.page', true);
  setVisible('#loading', false);
});
</script>

<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

<!--<script src="modal.js"></script>-->
</body>
</html>