<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>file</title>
</head>
<body>


<p>おかえりなさいませ<div id="name"><?php echo htmlspecialchars($_POST["name"]) ?></div>様</p>

<?php 
require_once 'connectDB.php';
require_once 'DatabaseController.php';
	
	$dbHandler = new DatabaseHandler;
	$con = $dbHandler->getConnection();
	$name = $_POST["name"];
	$age = $_POST["age"];
	if ($_POST["sex"]==="female"){
		$sex = 0;
	} else {
		$sex = 1;
	}
	
	try{
		$sql_insert = "INSERT INTO dbo.registration_tbl (name, age, sex) Values (?,?,?)";
		$stmt = $con->prepare($sql_insert);
		$stmt->bindValue(1, $name);
		$stmt->bindValue(2, $age);
		$stmt->bindValue(3, $sex);
		$stmt->execute();
	} catch(Exception $e){
		die(var_dump($e));
	}
	
	echo "<h3>データは登録されました</h3>";
	$ctrl = new firstRegistration();
	$html = $ctrl->showTables($Con);
	
				
?>


</body>
</html>