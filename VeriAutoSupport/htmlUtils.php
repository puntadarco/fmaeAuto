<?php
/**
 * html文字列を作るのに便利なstatic関数集
 * @author fumiyuki.maeyama
 *
 */
class HtmlUtils {
	
	
	/**
	 * 配列からテーブルを作る（もしかして存在しているかも・・）
	 * @param unknown $TblAllay
	 * @return string
	 */
	static public function getTableHtml($TblAllay){
		$res = "<table>";
		$lastRow = Count($TblArray);
		for ($row = 0; $i<$lastRow; $i++){
			$res .= "<tr>";
			$lastCol = Count($TblArray($row));
			for ($col = 0; $col<$lastCol; $col++){
				$res .= "<td>".$TblArray($row,$col)."</td>";
			}
			$res.= "</tr>";
		}
		$res = "</table>";
		return $res;
		
	}
}