<?php
/**
 * html����������̂ɕ֗���static�֐��W
 * @author fumiyuki.maeyama
 *
 */
class HtmlUtils {
	
	
	/**
	 * �z�񂩂�e�[�u�������i���������đ��݂��Ă��邩���E�E�j
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