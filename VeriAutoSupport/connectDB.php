<?php
//サーバー: zcerg9eih1.database.windows.net,1433
//SQL データベース: VeriCloud
//ユーザー名: veriadmin

class DatabaseHandler
{
	/**
	 * Databaseへ接続して、そのコネクションを返す
	 * @return connected object
	 */
	public function getConnection(){
		$dbservername = "tcp:zcerg9eih1.database.windows.net,1433";
		$dbname = "VeriCloud";
		$usr = "veriadmin";
		$pwd = "Automation0401";
		
		try {
			$conn = new PDO ( 
				"sqlsrv:server = $dbservername; Database = $dbname",
				$usr, $pwd);
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}
		catch ( PDOException $e ) {
			print( "Error connecting to SQL Server." );
			die(print_r($e));
		}
		return $conn;
	}
}

