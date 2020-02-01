<?php
	class MyDB extends SQLite3{
		function __construct(){
			$this->open('realdb.db');
		}
	}
	$db = new MyDB();
		$refno = (isset($_POST['refno']) ? $_POST['refno'] : '');
		//$pspb = (isset($_POST['pspb']) ? $_POST['pspb'] : '');
		$pipb = (isset($_POST['pipb']) ? $_POST['pipb'] : '');
		//$gp = (isset($_POST['gp']) ? $_POST['gp'] : '');
		//$bp = (isset($_POST['bp']) ? $_POST['bp'] : '');
		$sp = (isset($_POST['sp']) ? $_POST['sp'] : '');
		$arr = (isset($_POST['arr']) ? $_POST['arr'] : '');
		$othr = (isset($_POST['othr']) ? $_POST['othr'] : '');
		$joining = (isset($_POST['joining']) ? $_POST['joining'] : '');
		$designation = (isset($_POST['designation']) ? $_POST['designation'] : '');
		$da_per = (isset($_POST['da_per']) ? $_POST['da_per'] : '');
		$cca = (isset($_POST['cca']) ? $_POST['cca'] : '');
		$hra = (isset($_POST['hra']) ? $_POST['hra'] : '');
		$bonus = (isset($_POST['bonus']) ? $_POST['bonus'] : '');
		$absent = (isset($_POST['absent']) ? $_POST['absent'] : '');
		$total_days = (isset($_POST['total_days']) ? $_POST['total_days'] : '');
		$deduction = (isset($_POST['deduction']) ? $_POST['deduction'] : '');
		
		
		
		
		
		
	
		//$pspb=$_POST['pspb'];
		//$pipb=$_POST['pipb'];
		//$gp=$_POST['gp'];
		//$bp=$_POST['bp'];
		//$sp=$_POST['sp'];
		//$arr=$_POST['arr'];
		//$othr=$_POST['othr'];
		//$sql = "INSERT INTO mySalary (email,password,fullname) VALUES ('abhaypc26@gmail.com' ,  'Abhay@12345' ,  'Abhay Gupta')";
		
		$sql = "UPDATE datafield SET refno='$refno' , pipb='$pipb' , da_per='$da_per'  , sp='$sp' , arr = '$arr' , 
					othr='$othr' , joining='$joining' ,designation = '$designation' , cca='$cca' , hra='$hra' , 
					bonus='$bonus' , absent='$absent'  , total_days='$total_days' ,
					deduction='$deduction'	WHERE refno='$refno' ";
		
		//$sql= "UPDATE datafield SET refno='$refno' , pspb='$pspb' , pipb='$pipb' ,gp='$gp' ,bp='$bp' , sp='$sp' ,
									//arr='$arr',othr='$othr' , joining='$joining' WHERE refno='$refno' ";
		$db->exec($sql);
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=28";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			//pipb=basicpay in 7 pay
			$pipb1=$row["pipb"];
			$da_per1=$row["da_per"];
			$da1=$pipb1*$da_per1*0.01;
			$sp1=$row["sp"];
			$arr1=$row["arr"];
			$othr1=$row["othr"];
			$joining1=$row["joining"];
			$cca1=$row["cca"];
			$hra1=$row["hra"];
			$bonus1=$row["bonus"];
			$absent1=$row["absent"];
			$total_days1=$row["total_days"];
			$deduction1=(($pipb1 + $da1)*$absent1)/$total_days1;
			
			$gross1=$pipb1 + $da1 + $sp1 + $arr1 + $othr1 + $cca1 + $hra1 + $bonus1 - $deduction1;
			$designation1=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb1' , da_per='$da_per1' , da= '$da1' , sp='$sp1' , arr = '$arr1' , 
					othr='$othr1' , joining='$joining1' ,total_days='$total_days1' , designation= '$designation1' , cca='$cca1' , hra='$hra1' , bonus='$bonus1' , absent='$absent1'  ,
					deduction='$deduction1'	WHERE refno=28";
			//$sql= "UPDATE datafield SET gross='$gross1' , bp='$bp1' , da='$da1'    WHERE refno=28 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=2";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			//pipb=basicpay in 7 pay
			$pipb2=$row["pipb"];
			$da_per2=$row["da_per"];
			$da2=$pipb2*$da_per2*0.01;
			$sp2=$row["sp"];
			$arr2=$row["arr"];
			$othr2=$row["othr"];
			$joining2=$row["joining"];
			$cca2=$row["cca"];
			$hra2=$row["hra"];
			$bonus2=$row["bonus"];
			$absent2=$row["absent"];
			$total_days2=$row["total_days"];
			$deduction2=(($pipb2 + $da2)*$absent2)/$total_days2;
			
			$gross2=$pipb2 + $da2 + $sp2 + $arr2 + $othr2 + $cca2 + $hra2 + $bonus2 - $deduction2;
			$designation2=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb2' , da_per='$da_per2' , da= '$da2' , sp='$sp2' , arr = '$arr2' , 
					othr='$othr2' , joining='$joining2' ,total_days='$total_days2' , designation= '$designation2' , cca='$cca2' , hra='$hra2' , bonus='$bonus2' , absent='$absent2'  ,
					deduction='$deduction2'	WHERE refno=2";
			//$sql= "UPDATE datafield SET gross='$gross1' , bp='$bp1' , da='$da1'    WHERE refno=28 ";
			$db->exec($sql);
		}
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=3";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			//pipb=basicpay in 7 pay
			$pipb3=$row["pipb"];
			$da_per3=$row["da_per"];
			$da3=$pipb3*$da_per3*0.01;
			$sp3=$row["sp"];
			$arr3=$row["arr"];
			$othr3=$row["othr"];
			$joining3=$row["joining"];
			$cca3=$row["cca"];
			$hra3=$row["hra"];
			$bonus3=$row["bonus"];
			$absent3=$row["absent"];
			$total_days3=$row["total_days"];
			$deduction3=(($pipb3 + $da3)*$absent3)/$total_days3;
			
			$gross3=$pipb3 + $da3 + $sp3 + $arr3 + $othr3 + $cca3 + $hra3 + $bonus3 - $deduction3;
			$designation3=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb3' , da_per='$da_per3' , da= '$da3' , sp='$sp3' , arr = '$arr3' , 
					othr='$othr3' , joining='$joining3' ,total_days='$total_days3' , designation= '$designation3' , 
					cca='$cca3' , hra='$hra3' , bonus='$bonus3' , absent='$absent3'  ,
					deduction='$deduction3'	WHERE refno=3";
			//$sql= "UPDATE datafield SET gross='$gross1' , bp='$bp1' , da='$da1'    WHERE refno=28 ";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=4";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb4=$row["pipb"];
			$da_per4=$row["da_per"];
			$da4=$pipb4*$da_per4*0.01;
			$sp4=$row["sp"];
			$arr4=$row["arr"];
			$othr4=$row["othr"];
			$joining4=$row["joining"];
			$cca4=$row["cca"];
			$hra4=$row["hra"];
			$bonus4=$row["bonus"];
			$absent4=$row["absent"];
			$total_days4=$row["total_days"];
			$deduction4=(($pipb4 + $da4)*$absent4)/$total_days4;
			
			$gross4=$pipb4 + $da4 + $sp4 + $arr4 + $othr4 + $cca4 + $hra4 + $bonus4 - $deduction4;
			$designation4=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb4' , da_per='$da_per4' , da= '$da4' , sp='$sp4' , arr = '$arr4' , 
					othr='$othr4' , joining='$joining4' ,total_days='$total_days4' , designation= '$designation4' , 
					cca='$cca4' , hra='$hra4' , bonus='$bonus4' , absent='$absent4'  ,
					deduction='$deduction4'	WHERE refno=4";
			$db->exec($sql);
		}
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=5";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb5=$row["pipb"];
			$da_per5=$row["da_per"];
			$da5=$pipb5*$da_per5*0.01;
			$sp5=$row["sp"];
			$arr5=$row["arr"];
			$othr5=$row["othr"];
			$joining5=$row["joining"];
			$cca5=$row["cca"];
			$hra5=$row["hra"];
			$bonus5=$row["bonus"];
			$absent5=$row["absent"];
			$total_days5=$row["total_days"];
			$deduction5=(($pipb5 + $da5)*$absent5)/$total_days5;
			
			$gross5=$pipb5 + $da5 + $sp5 + $arr5 + $othr5 + $cca5 + $hra5 + $bonus5 - $deduction5;
			$designation5=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb5' , da_per='$da_per5' , da= '$da5' , sp='$sp5' , arr = '$arr5' , 
					othr='$othr5' , joining='$joining5' ,total_days='$total_days5' , designation= '$designation5' , 
					cca='$cca5' , hra='$hra5' , bonus='$bonus5' , absent='$absent5'  ,
					deduction='$deduction5'	WHERE refno=5";
			$db->exec($sql);
		}
		
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=7";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb7=$row["pipb"];
			$da_per7=$row["da_per"];
			$da7=$pipb7*$da_per7*0.01;
			$sp7=$row["sp"];
			$arr7=$row["arr"];
			$othr7=$row["othr"];
			$joining7=$row["joining"];
			$cca7=$row["cca"];
			$hra7=$row["hra"];
			$bonus7=$row["bonus"];
			$absent7=$row["absent"];
			$total_days7=$row["total_days"];
			$deduction7=(($pipb7 + $da7)*$absent7)/$total_days7;
			
			$gross7=$pipb7 + $da7 + $sp7 + $arr7 + $othr7 + $cca7 + $hra7 + $bonus7 - $deduction7;
			$designation7=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb7' , da_per='$da_per7' , da= '$da7' , sp='$sp7' , arr = '$arr7' , 
					othr='$othr7' , joining='$joining7' ,total_days='$total_days7' , designation= '$designation7' , 
					cca='$cca7' , hra='$hra7' , bonus='$bonus7' , absent='$absent7'  ,
					deduction='$deduction7'	WHERE refno=7";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=8";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb8=$row["pipb"];
			$da_per8=$row["da_per"];
			$da8=$pipb8*$da_per8*0.01;
			$sp8=$row["sp"];
			$arr8=$row["arr"];
			$othr8=$row["othr"];
			$joining8=$row["joining"];
			$cca8=$row["cca"];
			$hra8=$row["hra"];
			$bonus8=$row["bonus"];
			$absent8=$row["absent"];
			$total_days8=$row["total_days"];
			$deduction8=(($pipb8 + $da8)*$absent8)/$total_days8;
			
			$gross8=$pipb8 + $da8 + $sp8 + $arr8 + $othr8 + $cca8 + $hra8 + $bonus8 - $deduction8;
			$designation8=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb8' , da_per='$da_per8' , da= '$da8' , sp='$sp8' , arr = '$arr8' , 
					othr='$othr8' , joining='$joining8' ,total_days='$total_days8' , designation= '$designation8' , 
					cca='$cca8' , hra='$hra8' , bonus='$bonus8' , absent='$absent8'  ,
					deduction='$deduction8'	WHERE refno=8";
			$db->exec($sql);
		}
		
		
		
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=10";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb10=$row["pipb"];
			$da_per10=$row["da_per"];
			$da10=$pipb10*$da_per10*0.01;
			$sp10=$row["sp"];
			$arr10=$row["arr"];
			$othr10=$row["othr"];
			$joining10=$row["joining"];
			$cca10=$row["cca"];
			$hra10=$row["hra"];
			$bonus10=$row["bonus"];
			$absent10=$row["absent"];
			$total_days10=$row["total_days"];
			$deduction10=(($pipb10 + $da10)*$absent10)/$total_days10;
			
			$gross10=$pipb10 + $da10 + $sp10 + $arr10 + $othr10 + $cca10 + $hra10 + $bonus10 - $deduction10;
			$designation10=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb10' , da_per='$da_per10' , da= '$da10' , sp='$sp10' , arr = '$arr10' , 
					othr='$othr10' , joining='$joining10' ,total_days='$total_days10' , designation= '$designation10' , 
					cca='$cca10' , hra='$hra10' , bonus='$bonus10' , absent='$absent10'  ,
					deduction='$deduction10'	WHERE refno=10";
			$db->exec($sql);
		}
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=11";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb11=$row["pipb"];
			$da_per11=$row["da_per"];
			$da11=$pipb11*$da_per11*0.01;
			$sp11=$row["sp"];
			$arr11=$row["arr"];
			$othr11=$row["othr"];
			$joining11=$row["joining"];
			$cca11=$row["cca"];
			$hra11=$row["hra"];
			$bonus11=$row["bonus"];
			$absent11=$row["absent"];
			$total_days11=$row["total_days"];
			$deduction11=(($pipb11 + $da11)*$absent11)/$total_days11;
			
			$gross11=$pipb11 + $da11 + $sp11 + $arr11 + $othr11 + $cca11 + $hra11 + $bonus11 - $deduction11;
			$designation11=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb11' , da_per='$da_per11' , da= '$da11' , sp='$sp11' , arr = '$arr11' , 
					othr='$othr11' , joining='$joining11' ,total_days='$total_days11' , designation= '$designation11' , 
					cca='$cca11' , hra='$hra11' , bonus='$bonus11' , absent='$absent11'  ,
					deduction='$deduction11'	WHERE refno=11";
			$db->exec($sql);
		}
			
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=12";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb12=$row["pipb"];
			$da_per12=$row["da_per"];
			$da12=$pipb12*$da_per12*0.01;
			$sp12=$row["sp"];
			$arr12=$row["arr"];
			$othr12=$row["othr"];
			$joining12=$row["joining"];
			$cca12=$row["cca"];
			$hra12=$row["hra"];
			$bonus12=$row["bonus"];
			$absent12=$row["absent"];
			$total_days12=$row["total_days"];
			$deduction12=(($pipb12 + $da12)*$absent12)/$total_days12;
			
			$gross12=$pipb12 + $da12 + $sp12 + $arr12 + $othr12 + $cca12 + $hra12 + $bonus12 - $deduction12;
			$designation12=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb12' , da_per='$da_per12' , da= '$da12' , sp='$sp12' , arr = '$arr12' , 
					othr='$othr12' , joining='$joining12' ,total_days='$total_days12' , designation= '$designation12' , 
					cca='$cca12' , hra='$hra12' , bonus='$bonus12' , absent='$absent12'  ,
					deduction='$deduction12'	WHERE refno=12";
			$db->exec($sql);
		}	
		
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=13";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb13=$row["pipb"];
			$da_per13=$row["da_per"];
			$da13=$pipb13*$da_per13*0.01;
			$sp13=$row["sp"];
			$arr13=$row["arr"];
			$othr13=$row["othr"];
			$joining13=$row["joining"];
			$cca13=$row["cca"];
			$hra13=$row["hra"];
			$bonus13=$row["bonus"];
			$absent13=$row["absent"];
			$total_days13=$row["total_days"];
			$deduction13=(($pipb13 + $da13)*$absent13)/$total_days13;
			
			$gross13=$pipb13 + $da13 + $sp13 + $arr13 + $othr13 + $cca13 + $hra13 + $bonus13 - $deduction13;
			$designation13=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb13' , da_per='$da_per13' , da= '$da13' , sp='$sp13' , arr = '$arr13' , 
					othr='$othr13' , joining='$joining13' ,total_days='$total_days13' , designation= '$designation13' , 
					cca='$cca13' , hra='$hra13' , bonus='$bonus13' , absent='$absent13'  ,
					deduction='$deduction13'	WHERE refno=13";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=14";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb14=$row["pipb"];
			$da_per14=$row["da_per"];
			$da14=$pipb14*$da_per14*0.01;
			$sp14=$row["sp"];
			$arr14=$row["arr"];
			$othr14=$row["othr"];
			$joining14=$row["joining"];
			$cca14=$row["cca"];
			$hra14=$row["hra"];
			$bonus14=$row["bonus"];
			$absent14=$row["absent"];
			$total_days14=$row["total_days"];
			$deduction14=(($pipb14 + $da14)*$absent14)/$total_days14;
			
			$gross14=$pipb14 + $da14 + $sp14 + $arr14 + $othr14 + $cca14 + $hra14 + $bonus14 - $deduction14;
			$designation14=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb14' , da_per='$da_per14' , da= '$da14' , sp='$sp14' , arr = '$arr14' , 
					othr='$othr14' , joining='$joining14' ,total_days='$total_days14' , designation= '$designation14' , 
					cca='$cca14' , hra='$hra14' , bonus='$bonus14' , absent='$absent14'  ,
					deduction='$deduction14'	WHERE refno=14";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=15";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb15=$row["pipb"];
			$da_per15=$row["da_per"];
			$da15=$pipb15*$da_per15*0.01;
			$sp15=$row["sp"];
			$arr15=$row["arr"];
			$othr15=$row["othr"];
			$joining15=$row["joining"];
			$cca15=$row["cca"];
			$hra15=$row["hra"];
			$bonus15=$row["bonus"];
			$absent15=$row["absent"];
			$total_days15=$row["total_days"];
			$deduction15=(($pipb15 + $da15)*$absent15)/$total_days15;
			
			$gross15=$pipb15 + $da15 + $sp15 + $arr15 + $othr15 + $cca15 + $hra15 + $bonus15 - $deduction15;
			$designation15=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb15' , da_per='$da_per15' , da= '$da15' , sp='$sp15' , arr = '$arr15' , 
					othr='$othr15' , joining='$joining15' ,total_days='$total_days15' , designation= '$designation15' , 
					cca='$cca15' , hra='$hra15' , bonus='$bonus15' , absent='$absent15'  ,
					deduction='$deduction15'	WHERE refno=15";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=16";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb16=$row["pipb"];
			$da_per16=$row["da_per"];
			$da16=$pipb16*$da_per16*0.01;
			$sp16=$row["sp"];
			$arr16=$row["arr"];
			$othr16=$row["othr"];
			$joining16=$row["joining"];
			$cca16=$row["cca"];
			$hra16=$row["hra"];
			$bonus16=$row["bonus"];
			$absent16=$row["absent"];
			$total_days16=$row["total_days"];
			$deduction16=(($pipb16 + $da16)*$absent16)/$total_days16;
			
			$gross16=$pipb16 + $da16 + $sp16 + $arr16 + $othr16 + $cca16 + $hra16 + $bonus16 - $deduction16;
			$designation16=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb16' , da_per='$da_per16' , da= '$da16' , sp='$sp16' , arr = '$arr16' , 
					othr='$othr16' , joining='$joining16' ,total_days='$total_days16' , designation= '$designation16' , 
					cca='$cca16' , hra='$hra16' , bonus='$bonus16' , absent='$absent16'  ,
					deduction='$deduction16'	WHERE refno=16";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=17";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb17=$row["pipb"];
			$da_per17=$row["da_per"];
			$da17=$pipb17*$da_per17*0.01;
			$sp17=$row["sp"];
			$arr17=$row["arr"];
			$othr17=$row["othr"];
			$joining17=$row["joining"];
			$cca17=$row["cca"];
			$hra17=$row["hra"];
			$bonus17=$row["bonus"];
			$absent17=$row["absent"];
			$total_days17=$row["total_days"];
			$deduction17=(($pipb17 + $da17)*$absent17)/$total_days17;
			
			$gross17=$pipb17 + $da17 + $sp17 + $arr17 + $othr17 + $cca17 + $hra17 + $bonus17 - $deduction17;
			$designation17=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb17' , da_per='$da_per17' , da= '$da17' , sp='$sp17' , arr = '$arr17' , 
					othr='$othr17' , joining='$joining17' ,total_days='$total_days17' , designation= '$designation17' , 
					cca='$cca17' , hra='$hra17' , bonus='$bonus17' , absent='$absent17'  ,
					deduction='$deduction17'	WHERE refno=17";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=18";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb18=$row["pipb"];
			$da_per18=$row["da_per"];
			$da18=$pipb18*$da_per18*0.01;
			$sp18=$row["sp"];
			$arr18=$row["arr"];
			$othr18=$row["othr"];
			$joining18=$row["joining"];
			$cca18=$row["cca"];
			$hra18=$row["hra"];
			$bonus18=$row["bonus"];
			$absent18=$row["absent"];
			$total_days18=$row["total_days"];
			$deduction18=(($pipb18 + $da18)*$absent18)/$total_days18;
			
			$gross18=$pipb18 + $da18 + $sp18 + $arr18 + $othr18 + $cca18 + $hra18 + $bonus18 - $deduction18;
			$designation18=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb18' , da_per='$da_per18' , da= '$da18' , sp='$sp18' , arr = '$arr18' , 
					othr='$othr18' , joining='$joining18' ,total_days='$total_days18' , designation= '$designation18' , 
					cca='$cca18' , hra='$hra18' , bonus='$bonus18' , absent='$absent18'  ,
					deduction='$deduction18'	WHERE refno=18";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=19";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb19=$row["pipb"];
			$da_per19=$row["da_per"];
			$da19=$pipb19*$da_per19*0.01;
			$sp19=$row["sp"];
			$arr19=$row["arr"];
			$othr19=$row["othr"];
			$joining19=$row["joining"];
			$cca19=$row["cca"];
			$hra19=$row["hra"];
			$bonus19=$row["bonus"];
			$absent19=$row["absent"];
			$total_days19=$row["total_days"];
			$deduction19=(($pipb19 + $da19)*$absent19)/$total_days19;
			
			$gross19=$pipb19 + $da19 + $sp19 + $arr19 + $othr19 + $cca19 + $hra19 + $bonus19 - $deduction19;
			$designation19=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb19' , da_per='$da_per19' , da= '$da19' , sp='$sp19' , arr = '$arr19' , 
					othr='$othr19' , joining='$joining19' ,total_days='$total_days19' , designation= '$designation19' , 
					cca='$cca19' , hra='$hra19' , bonus='$bonus19' , absent='$absent19'  ,
					deduction='$deduction19'	WHERE refno=19";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=20";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb20=$row["pipb"];
			$da_per20=$row["da_per"];
			$da20=$pipb20*$da_per20*0.01;
			$sp20=$row["sp"];
			$arr20=$row["arr"];
			$othr20=$row["othr"];
			$joining20=$row["joining"];
			$cca20=$row["cca"];
			$hra20=$row["hra"];
			$bonus20=$row["bonus"];
			$absent20=$row["absent"];
			$total_days20=$row["total_days"];
			$deduction20=(($pipb20 + $da20)*$absent20)/$total_days20;
			
			$gross20=$pipb20 + $da20 + $sp20 + $arr20 + $othr20 + $cca20 + $hra20 + $bonus20 - $deduction20;
			$designation20=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb20' , da_per='$da_per20' , da= '$da20' , sp='$sp20' , arr = '$arr20' , 
					othr='$othr20' , joining='$joining20' ,total_days='$total_days20' , designation= '$designation20' , 
					cca='$cca20' , hra='$hra20' , bonus='$bonus20' , absent='$absent20'  ,
					deduction='$deduction20'	WHERE refno=20";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=21";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb21=$row["pipb"];
			$da_per21=$row["da_per"];
			$da21=$pipb21*$da_per21*0.01;
			$sp21=$row["sp"];
			$arr21=$row["arr"];
			$othr21=$row["othr"];
			$joining21=$row["joining"];
			$cca21=$row["cca"];
			$hra21=$row["hra"];
			$bonus21=$row["bonus"];
			$absent21=$row["absent"];
			$total_days21=$row["total_days"];
			$deduction21=(($pipb21 + $da21)*$absent21)/$total_days21;
			
			$gross21=$pipb21 + $da21 + $sp21 + $arr21 + $othr21 + $cca21 + $hra21 + $bonus21 - $deduction21;
			$designation21=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb21' , da_per='$da_per21' , da= '$da21' , sp='$sp21' , arr = '$arr21' , 
					othr='$othr21' , joining='$joining21' ,total_days='$total_days21' , designation= '$designation21' , 
					cca='$cca21' , hra='$hra21' , bonus='$bonus21' , absent='$absent21'  ,
					deduction='$deduction21'	WHERE refno=21";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=22";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb22=$row["pipb"];
			$da_per22=$row["da_per"];
			$da22=$pipb22*$da_per22*0.01;
			$sp22=$row["sp"];
			$arr22=$row["arr"];
			$othr22=$row["othr"];
			$joining22=$row["joining"];
			$cca22=$row["cca"];
			$hra22=$row["hra"];
			$bonus22=$row["bonus"];
			$absent22=$row["absent"];
			$total_days22=$row["total_days"];
			$deduction22=(($pipb22 + $da22)*$absent22)/$total_days22;
			
			$gross22=$pipb22 + $da22 + $sp22 + $arr22 + $othr22 + $cca22 + $hra22 + $bonus22 - $deduction22;
			$designation22=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb22' , da_per='$da_per22' , da= '$da22' , sp='$sp22' , arr = '$arr22' , 
					othr='$othr22' , joining='$joining22' ,total_days='$total_days22' , designation= '$designation22' , 
					cca='$cca22' , hra='$hra22' , bonus='$bonus22' , absent='$absent22'  ,
					deduction='$deduction22'	WHERE refno=22";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=23";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb23=$row["pipb"];
			$da_per23=$row["da_per"];
			$da23=$pipb23*$da_per23*0.01;
			$sp23=$row["sp"];
			$arr23=$row["arr"];
			$othr23=$row["othr"];
			$joining23=$row["joining"];
			$cca23=$row["cca"];
			$hra23=$row["hra"];
			$bonus23=$row["bonus"];
			$absent23=$row["absent"];
			$total_days23=$row["total_days"];
			$deduction23=(($pipb23 + $da23)*$absent23)/$total_days23;
			
			$gross23=$pipb23 + $da23 + $sp23 + $arr23 + $othr23 + $cca23 + $hra23 + $bonus23 - $deduction23;
			$designation23=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb23' , da_per='$da_per23' , da= '$da23' , sp='$sp23' , arr = '$arr23' , 
					othr='$othr23' , joining='$joining23' ,total_days='$total_days23' , designation= '$designation23' , 
					cca='$cca23' , hra='$hra23' , bonus='$bonus23' , absent='$absent23'  ,
					deduction='$deduction23'	WHERE refno=23";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=24";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb24=$row["pipb"];
			$da_per24=$row["da_per"];
			$da24=$pipb24*$da_per24*0.01;
			$sp24=$row["sp"];
			$arr24=$row["arr"];
			$othr24=$row["othr"];
			$joining24=$row["joining"];
			$cca24=$row["cca"];
			$hra24=$row["hra"];
			$bonus24=$row["bonus"];
			$absent24=$row["absent"];
			$total_days24=$row["total_days"];
			$deduction24=(($pipb24 + $da24)*$absent24)/$total_days24;
			
			$gross24=$pipb24 + $da24 + $sp24 + $arr24 + $othr24 + $cca24 + $hra24 + $bonus24 - $deduction24;
			$designation24=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb24' , da_per='$da_per24' , da= '$da24' , sp='$sp24' , arr = '$arr24' , 
					othr='$othr24' , joining='$joining24' ,total_days='$total_days24' , designation= '$designation24' , 
					cca='$cca24' , hra='$hra24' , bonus='$bonus24' , absent='$absent24'  ,
					deduction='$deduction24'	WHERE refno=24";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=25";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb25=$row["pipb"];
			$da_per25=$row["da_per"];
			$da25=$pipb25*$da_per25*0.01;
			$sp25=$row["sp"];
			$arr25=$row["arr"];
			$othr25=$row["othr"];
			$joining25=$row["joining"];
			$cca25=$row["cca"];
			$hra25=$row["hra"];
			$bonus25=$row["bonus"];
			$absent25=$row["absent"];
			$total_days25=$row["total_days"];
			$deduction25=(($pipb25 + $da25)*$absent25)/$total_days25;
			
			$gross25=$pipb25 + $da25 + $sp25 + $arr25 + $othr25 + $cca25 + $hra25 + $bonus25 - $deduction25;
			$designation25=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb25' , da_per='$da_per25' , da= '$da25' , sp='$sp25' , arr = '$arr25' , 
					othr='$othr25' , joining='$joining25' ,total_days='$total_days25' , designation= '$designation25' , 
					cca='$cca25' , hra='$hra25' , bonus='$bonus25' , absent='$absent25'  ,
					deduction='$deduction25'	WHERE refno=25";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=26";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb26=$row["pipb"];
			$da_per26=$row["da_per"];
			$da26=$pipb26*$da_per26*0.01;
			$sp26=$row["sp"];
			$arr26=$row["arr"];
			$othr26=$row["othr"];
			$joining26=$row["joining"];
			$cca26=$row["cca"];
			$hra26=$row["hra"];
			$bonus26=$row["bonus"];
			$absent26=$row["absent"];
			$total_days26=$row["total_days"];
			$deduction26=(($pipb26 + $da26)*$absent26)/$total_days26;
			
			$gross26=$pipb26 + $da26 + $sp26 + $arr26 + $othr26 + $cca26 + $hra26 + $bonus26 - $deduction26;
			$designation26=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb26' , da_per='$da_per26' , da= '$da26' , sp='$sp26' , arr = '$arr26' , 
					othr='$othr26' , joining='$joining26' ,total_days='$total_days26' , designation= '$designation26' , 
					cca='$cca26' , hra='$hra26' , bonus='$bonus26' , absent='$absent26'  ,
					deduction='$deduction26'	WHERE refno=26";
			$db->exec($sql);
		}
		$db = new SQLite3('realdb.db');
		$sql_query="SELECT * FROM datafield  WHERE refno=27";
		$results = $db->query($sql_query );
		while ($row = $results->fetchArray())
		{
			$pipb27=$row["pipb"];
			$da_per27=$row["da_per"];
			$da27=$pipb27*$da_per27*0.01;
			$sp27=$row["sp"];
			$arr27=$row["arr"];
			$othr27=$row["othr"];
			$joining27=$row["joining"];
			$cca27=$row["cca"];
			$hra27=$row["hra"];
			$bonus27=$row["bonus"];
			$absent27=$row["absent"];
			$total_days27=$row["total_days"];
			$deduction27=(($pipb27 + $da27)*$absent27)/$total_days27;
			
			$gross27=$pipb27 + $da27 + $sp27 + $arr27 + $othr27 + $cca27 + $hra27 + $bonus27 - $deduction27;
			$designation27=$row["designation"];
			$sql = "UPDATE datafield SET pipb='$pipb27' , da_per='$da_per27' , da= '$da27' , sp='$sp27' , arr = '$arr27' , 
					othr='$othr27' , joining='$joining27' ,total_days='$total_days27' , designation= '$designation27' , 
					cca='$cca27' , hra='$hra27' , bonus='$bonus27' , absent='$absent27'  ,
					deduction='$deduction27'	WHERE refno=27";
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
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
    <button name="create_excel" id="create_excel" class="btn btn-danger" style="margin: -150px 0 0 1000px" onclick="main()" >Print</button>
	
	

</div>




<div style="margin-top:-40px">
    <table class="table-bordered table-hover table2excel" id="tblCustomers" cellspacing="0" cellpadding="0" >
        <thead class="bg-primary text-white text-center ">
            <th class="font-weight-bold">S.No.</th>
            <th class="font-weight-bold">REF.NO.</th>
            <th class="font-weight-bold " style="padding: 0 70px 0 70px">NAME OF EMPLOYEE</th>
            <th class="font-weight-bold">DESIGNATION</th>
            <th class="font-weight-bold">DATE OF JOINING</th>
            <th class="font-weight-bold"> DETE INCR.</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">PAY LEVEL</th>
            <th class="font-weight-bold">AGP IN 6th PAY COMMISSION</th>
            <th class="font-weight-bold" style="padding: 0 20px 0 20px">BASIC PAY IN 7th PAY COMMISION.</th>
            <th class="font-weight-bold">DA(154%)</th>
			<th class="font-weight-bold">TOTAL DA</th>
			<th class="font-weight-bold">CCA</th>
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

                <td><?php  echo $designation1 ?></td>
                <td>20-01-2018</td>
                <td id="spdete"><?php  echo $joining1 ?></td>
                <td>14</td>
                <td>10000</td>
				<td><?php  echo $pipb1 ?></td>
                <td><?php  echo $da_per1 ?></td>
                <td><?php  echo $da1 ?></td>
                <td><?php  echo $cca1 ?></td>
                <td><?php echo $hra1 ?></td>
                
                <td><?php echo $sp1 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus1 ?></td>
                
                <td><?php echo $arr1 ?></td>
				<td><?php echo $deduction1 ?></td>
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
                <td><?php  echo $designation2 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining2 ?></td>
                <td>13A</td>
				<td>9000</td>
				<td><?php  echo $pipb2 ?></td>
                <td><?php  echo $da_per2 ?></td>
                <td><?php  echo $da2 ?></td>
                <td><?php  echo $cca2 ?></td>
                <td><?php echo $hra2 ?></td>
                
                <td><?php echo $sp2 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus2 ?></td>
                
                <td><?php echo $arr2 ?></td>
				<td><?php echo $deduction2 ?></td>
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
                <td><?php  echo $designation3 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining3 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb3 ?></td>
                <td><?php  echo $da_per3 ?></td>
                <td><?php  echo $da3 ?></td>
                <td><?php  echo $cca3 ?></td>
                <td><?php echo $hra3 ?></td>
                
                <td><?php echo $sp3 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus3 ?></td>
                
                <td><?php echo $arr3 ?></td>
				<td><?php echo $deduction3 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr3 ?></td>
                <td><?php echo $gross3 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">04</th>
                <td>04</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SAURABH TRIPATHI</a></td>
                <td><?php  echo $designation4 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining4 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb4 ?></td>
                <td><?php  echo $da_per4 ?></td>
                <td><?php  echo $da4 ?></td>
                <td><?php  echo $cca4 ?></td>
                <td><?php echo $hra4 ?></td>
                
                <td><?php echo $sp4 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus4 ?></td>
                
                <td><?php echo $arr4 ?></td>
				<td><?php echo $deduction4 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr4 ?></td>
                <td><?php echo $gross4 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">05</th>
                <td>05</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANKUSH KUMAR RAJPOOT</a></td>
                <td><?php  echo $designation5 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining5 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb5 ?></td>
                <td><?php  echo $da_per5 ?></td>
                <td><?php  echo $da5 ?></td>
                <td><?php  echo $cca5 ?></td>
                <td><?php echo $hra5 ?></td>
                
                <td><?php echo $sp5 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus5 ?></td>
                
                <td><?php echo $arr5 ?></td>
				<td><?php echo $deduction5 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr5 ?></td>
                <td><?php echo $gross5 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">06</th>
                <td>07</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AKSHAYKANT</a></td>
                <td><?php  echo $designation7 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining7 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb7 ?></td>
                <td><?php  echo $da_per7 ?></td>
                <td><?php  echo $da7 ?></td>
                <td><?php  echo $cca7 ?></td>
                <td><?php echo $hra7 ?></td>
                
                <td><?php echo $sp7 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus7 ?></td>
                
                <td><?php echo $arr7 ?></td>
				<td><?php echo $deduction7 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr7 ?></td>
                <td><?php echo $gross7 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">07</th>
                <td>08</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. RAVI SHANKAR</a></td>
                <td><?php  echo $designation8 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining8 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb8 ?></td>
                <td><?php  echo $da_per8 ?></td>
                <td><?php  echo $da8 ?></td>
                <td><?php  echo $cca8 ?></td>
                <td><?php echo $hra8 ?></td>
                
                <td><?php echo $sp8 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus8 ?></td>
                
                <td><?php echo $arr8 ?></td>
				<td><?php echo $deduction8 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr8 ?></td>
                <td><?php echo $gross8 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">08</th>
                <td>10</td>
                <td class="text-left">
				<a  href="#" data-toggle="modal" data-target="#spshukla">MR. DEEP SINGH THAKUR</a>
				</td>
                <td><?php  echo $designation10 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining10 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb10 ?></td>
                <td><?php  echo $da_per10 ?></td>
                <td><?php  echo $da10 ?></td>
                <td><?php  echo $cca10 ?></td>
                <td><?php echo $hra10 ?></td>
                
                <td><?php echo $sp10 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus10 ?></td>
                
                <td><?php echo $arr10 ?></td>
				<td><?php echo $deduction10 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr10 ?></td>
                <td><?php echo $gross10 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">09</th>
                <td>11</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ARUN KUMAR</a></td>
                <td><?php  echo $designation11 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining11 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb11 ?></td>
                <td><?php  echo $da_per11 ?></td>
                <td><?php  echo $da11 ?></td>
                <td><?php  echo $cca11 ?></td>
                <td><?php echo $hra11 ?></td>
                
                <td><?php echo $sp11 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus11 ?></td>
                
                <td><?php echo $arr11 ?></td>
				<td><?php echo $deduction11 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr11 ?></td>
                <td><?php echo $gross11 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">10</th>
                <td>12</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. PUSHPENDRA SINGH</a></td>
                <td><?php  echo $designation12 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining12 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb12 ?></td>
                <td><?php  echo $da_per12 ?></td>
                <td><?php  echo $da12 ?></td>
                <td><?php  echo $cca12 ?></td>
                <td><?php echo $hra12 ?></td>
                
                <td><?php echo $sp12 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus12 ?></td>
                
                <td><?php echo $arr12 ?></td>
				<td><?php echo $deduction12 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr12 ?></td>
                <td><?php echo $gross12 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">11</th>
                <td>13</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ANURAG CHAUHAN</a></td>
                <td><?php  echo $designation13 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining13 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb13 ?></td>
                <td><?php  echo $da_per13 ?></td>
                <td><?php  echo $da13 ?></td>
                <td><?php  echo $cca13 ?></td>
                <td><?php echo $hra13 ?></td>
                
                <td><?php echo $sp13 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus13 ?></td>
                
                <td><?php echo $arr13 ?></td>
				<td><?php echo $deduction13 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr13 ?></td>
                <td><?php echo $gross13 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">12</th>
                <td>14</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MOHD. TAUSEEF KHAN</a></td>
                <td><?php  echo $designation14 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining14 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb14 ?></td>
                <td><?php  echo $da_per14 ?></td>
                <td><?php  echo $da14 ?></td>
                <td><?php  echo $cca14 ?></td>
                <td><?php echo $hra14 ?></td>
                
                <td><?php echo $sp14 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus14 ?></td>
                
                <td><?php echo $arr14 ?></td>
				<td><?php echo $deduction14 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr14 ?></td>
                <td><?php echo $gross14 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">13</th>
                <td>15</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH TRIPATHI</a></td>
                <td><?php  echo $designation15 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining15 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb15 ?></td>
                <td><?php  echo $da_per15 ?></td>
                <td><?php  echo $da15 ?></td>
                <td><?php  echo $cca15 ?></td>
                <td><?php echo $hra15 ?></td>
                
                <td><?php echo $sp15 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus15 ?></td>
                
                <td><?php echo $arr15 ?></td>
				<td><?php echo $deduction15 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr15 ?></td>
                <td><?php echo $gross15 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">14</th>
                <td>16</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHISH SRIVASTAV</a></td>
                <td><?php  echo $designation15 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining15 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb15 ?></td>
                <td><?php  echo $da_per15 ?></td>
                <td><?php  echo $da15 ?></td>
                <td><?php  echo $cca15 ?></td>
                <td><?php echo $hra15 ?></td>
                
                <td><?php echo $sp15 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus15 ?></td>
                
                <td><?php echo $arr15 ?></td>
				<td><?php echo $deduction15 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr15 ?></td>
                <td><?php echo $gross15 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">15</th>
                <td>17</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. GURUSHARAN SINGH</a></td>
                <td><?php  echo $designation17 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining17 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb17 ?></td>
                <td><?php  echo $da_per17 ?></td>
                <td><?php  echo $da17 ?></td>
                <td><?php  echo $cca17 ?></td>
                <td><?php echo $hra17 ?></td>
                
                <td><?php echo $sp17 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus17 ?></td>
                
                <td><?php echo $arr17 ?></td>
				<td><?php echo $deduction17 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr17 ?></td>
                <td><?php echo $gross17 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">16</th>
                <td>18</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SARVESH KUMAR</a></td>
               <td><?php  echo $designation18 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining18 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb18 ?></td>
                <td><?php  echo $da_per18 ?></td>
                <td><?php  echo $da18 ?></td>
                <td><?php  echo $cca18 ?></td>
                <td><?php echo $hra18 ?></td>
                
                <td><?php echo $sp18 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus18 ?></td>
                
                <td><?php echo $arr18 ?></td>
				<td><?php echo $deduction18 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr18 ?></td>
                <td><?php echo $gross18 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">17</th>
                <td>19</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MRITYUNJAY SINGH</a></td>
                <td><?php  echo $designation19 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining19 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb19 ?></td>
                <td><?php  echo $da_per19 ?></td>
                <td><?php  echo $da19 ?></td>
                <td><?php  echo $cca19 ?></td>
                <td><?php echo $hra19 ?></td>
                
                <td><?php echo $sp19 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus19 ?></td>
                
                <td><?php echo $arr19 ?></td>
				<td><?php echo $deduction19 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr19 ?></td>
                <td><?php echo $gross19 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">18</th>
                <td>20</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ABHIJEET SINGH</a></td>
               <td><?php  echo $designation20 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining20 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb20 ?></td>
                <td><?php  echo $da_per20 ?></td>
                <td><?php  echo $da20 ?></td>
                <td><?php  echo $cca20 ?></td>
                <td><?php echo $hra20 ?></td>
                
                <td><?php echo $sp20 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus20 ?></td>
                
                <td><?php echo $arr20 ?></td>
				<td><?php echo $deduction20 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr20 ?></td>
                <td><?php echo $gross20 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">19</th>
                <td>21</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SHAILENDRA BADAL</a></td>
                <td><?php  echo $designation21 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining21 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb21 ?></td>
                <td><?php  echo $da_per21 ?></td>
                <td><?php  echo $da21 ?></td>
                <td><?php  echo $cca21 ?></td>
                <td><?php echo $hra21 ?></td>
                
                <td><?php echo $sp21 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus21 ?></td>
                
                <td><?php echo $arr21 ?></td>
				<td><?php echo $deduction21 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr21 ?></td>
                <td><?php echo $gross21 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">20</th>
                <td>22</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. ASHUTOSH TIWARI</a></td>
                <td><?php  echo $designation22 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining22 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb22 ?></td>
                <td><?php  echo $da_per22 ?></td>
                <td><?php  echo $da22 ?></td>
                <td><?php  echo $cca22 ?></td>
                <td><?php echo $hra22 ?></td>
                
                <td><?php echo $sp22 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus22 ?></td>
                
                <td><?php echo $arr22 ?></td>
				<td><?php echo $deduction22 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr22 ?></td>
                <td><?php echo $gross22 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">21</th>
                <td>23</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. SURENDRA KUMAR</a></td>
                <td><?php  echo $designation23 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining23 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb23 ?></td>
                <td><?php  echo $da_per23 ?></td>
                <td><?php  echo $da23 ?></td>
                <td><?php  echo $cca23 ?></td>
                <td><?php echo $hra23 ?></td>
                
                <td><?php echo $sp23 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus23 ?></td>
                
                <td><?php echo $arr23 ?></td>
				<td><?php echo $deduction23 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr23 ?></td>
                <td><?php echo $gross23 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">22</th>
                <td>24</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. AMIT TRIPATHI</a></td>
                <td><?php  echo $designation24 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining24 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb24 ?></td>
                <td><?php  echo $da_per24 ?></td>
                <td><?php  echo $da24 ?></td>
                <td><?php  echo $cca24 ?></td>
                <td><?php echo $hra24 ?></td>
                
                <td><?php echo $sp24 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus24 ?></td>
                
                <td><?php echo $arr24 ?></td>
				<td><?php echo $deduction24 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr24 ?></td>
                <td><?php echo $gross24 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">23</th>
                <td>25</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >MR. MANOJ KUMAR SINGH</a></td>
                <td><?php  echo $designation25 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining25 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb25 ?></td>
                <td><?php  echo $da_per25 ?></td>
                <td><?php  echo $da25 ?></td>
                <td><?php  echo $cca25 ?></td>
                <td><?php echo $hra25 ?></td>
                
                <td><?php echo $sp25 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus25 ?></td>
                
                <td><?php echo $arr25 ?></td>
				<td><?php echo $deduction25 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr25 ?></td>
                <td><?php echo $gross25 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">24</th>
                <td>26</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. ARCHANA SINGH</a></td>
                <td><?php  echo $designation26 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining26 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb26 ?></td>
                <td><?php  echo $da_per26 ?></td>
                <td><?php  echo $da26 ?></td>
                <td><?php  echo $cca26 ?></td>
                <td><?php echo $hra26 ?></td>
                
                <td><?php echo $sp26 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus26 ?></td>
                
                <td><?php echo $arr26 ?></td>
				<td><?php echo $deduction26 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr26 ?></td>
                <td><?php echo $gross26 ?></td>

            </tr>

            <tr>
                <th class="font-weight-bold">25</th>
                <td>27</td>
                <td class="text-left"><a  href="#" data-toggle="modal" data-target="#spshukla" >DR. POOJA SINGH</a></td>
                <td><?php  echo $designation27 ?></td>
                <td>08-12-17</td>
                <td><?php  echo $joining27 ?></td>
                <td>10</td>
				<td>6000</td>
				<td><?php  echo $pipb27 ?></td>
                <td><?php  echo $da_per27 ?></td>
                <td><?php  echo $da27 ?></td>
                <td><?php  echo $cca27 ?></td>
                <td><?php echo $hra27 ?></td>
                
                <td><?php echo $sp27 ?></td>
				<td>0-00</td>
                <td>0-00</td>
                <td><?php echo $bonus27 ?></td>
                
                <td><?php echo $arr27 ?></td>
				<td><?php echo $deduction27 ?></td>
                <td>0-00</td>
                
                <td><?php echo $othr27 ?></td>
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
                        <td>DESIGNATION</td>
                        <td>
                            <select id="designation" name="designation" >
								<option selected >Select One</option>
                                <option value="Director">Director</option>
                                <option value="Associate Professor">Associate Professor</option>
								<option value="Assistant Professor">Assistant Professor</option>
								<option value="Professor">Professor</option>
                            </select>
                        </td>
                    </tr>
					<tr>
                        <td>DATE INCR.</td>
                        <td>
                            <select id="joining" name="joining" style="width:170px" >
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
                        <td>BASIC PAY IN 7th PAY COMMISION</td>
                        <td><input type="number" id="pipb" name="pipb"></td>
                    </tr>
                    <!--<tr>
                        <td>GROSS PAY</td>
                        <td><input type="number" id="gp" name="gp"></td>
                    </tr>-->
                    <!--<tr>
                        <td>BASIC PAY</td>
                        <td><input type="number" id="bp" name="bp"> </td>
                    </tr>-->
					<tr>
                        <td>DA %</td>
                        <td><input type="number" id="da_per" name="da_per"></td>
                    </tr>
					<tr>
                        <td>CCA</td>
                        <td><input type="number" id="cca" name="cca"></td>
                    </tr>
					<tr>
                        <td>HRA</td>
                        <td><input type="number" id="hra" name="hra"></td>
                    </tr>
                    <tr>
                        <td>SPL. PAY</td>
                        <td><input type="number" id="sp" name="sp"></td>
                    </tr>
					<tr>
                        <td>BONUS</td>
                        <td><input type="number" id="bonus" name="bonus"></td>
                    </tr>
                    <tr>
                        <td>ARREARS</td>
                        <td><input type="number" id="arr" name="arr"></td>
                    </tr>
					<tr>
                        <td>ENTER NO. OF ABSENT DAYS </td>
                        <td><input type="number" id="absent" name="absent"></td>
                    </tr>
					<tr>
                        <td>ENTER NO.OF DAYS IN PERTICULAR MONTH</td>
                        <td><input type="number" id="total_days" name="total_days"></td>
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

<script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#employee_table').html();  
           var page = "excel.php?data=" + excel_data;  
           window.location = page;  
      });  
 });  
 </script>
 
 <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tblCustomers'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
					
                }
				
            });
			var pdf = new jsPDF('l', 'mm', [297, 210]);
					doc.save("new.pdf");
        }
    </script>-->


<script src="bootstrap/js/fontawesome-all.js"></script>
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/mdb.min.js"></script>

<!--<script src="modal.js"></script>-->




</body>
</html>