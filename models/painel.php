<?php
class PainelModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM campings  ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}
}