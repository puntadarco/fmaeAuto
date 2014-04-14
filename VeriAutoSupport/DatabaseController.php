<?php
	require_once 'htmlUtils.php';
/**
 * Databaseの情報を操作するクラス：registration_tbl テーブル
 * @author fumiyuki.maeyama
 *
 */
class firstRegistration {
	
	public function showTables($Con){
		$TblArray = "test";
		// Retrieve data
		$sql_select = "SELECT * FROM dbo.registration_tbl";
		$stmt = $conn->query($sql_select);
		$registrants = $stmt->fetchAll();
		if(count($registrants) > 0) {
			$rowArray = array();
			$rowArray[] = $registrants['name']; 
			$rowArray[] = $registrants['age']; 
						$rowArray[] = $registrants['sex']; 
			foreach($registrants as $registrant) {
				echo "<tr><td>".$registrant['name']."</td>";
				echo "<td>".$registrant['email']."</td>";
				echo "<td>".$registrant['date']."</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<h3>No one is currently registered.</h3>";
		}
		
		$resTbl = HtmlUtils::getTableHtml($TblAllay);
		return $resTbl;	
	}
}