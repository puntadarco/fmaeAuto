<?php
//�T�[�o�[: zcerg9eih1.database.windows.net,1433
//SQL �f�[�^�x�[�X: VeriCloud
//���[�U�[��: veriadmin

class DatabaseHandler
{
	/**
	 * Database�֐ڑ����āA���̃R�l�N�V������Ԃ�
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

