<?php
class HomeModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM campings ORDER BY create_date DESC limit 3');
		$rows = $this->resultSet();
		return $rows;
	}
}