<?php
include_once('connection.php');
if(isset($_POST['submit']));
{
	if(!empty($_POST['scheme']) && ($_POST['season']) && ($_POST['year']) && ($_POST['mixcropping']) && ($_POST['crop']) && ($_POST['sowingdate']) && ($_POST['surveykhatano']) && ($_POST['plotno']) && ($_POST['insuredarea']))
	{
		if(mysql_query("insert into applicationstatus(scheme,season,year,mixcropping,crop,sowingdate,surveykhatano
			,plotno,insuredarea) values('$scheme','$season','$year','$mixedcropping','$crop','$sowingdate','$surveykhatano','$plotno','$insuredarea')"));
		{
			echo "your data is inserted";
			header("refresh:2,url=");
		}
	}
	else
	{
		echo "please completely fill your form";

	}

}
?>