<?php

require_once("BaseDatos.class.php");

class PlanBD extends BaseDatos {

	function PlanBD() {
	}
	
	function save() {
		$sql = "INSERT INTO plan (nombre_plan, tipo_plan, valor, fecha) VALUES ('".$this->nombre_plan."',".$this->tipo_plan.",".$this->valor.",'".$this->fecha."')";
		if(!$this->insertbd($sql))
			return false;
		return true;
	}
	
	function delete() {
		$sql = "DELETE FROM plan WHERE id_plan = ".$this->id_plan;
		return $this->deletebd($sql);
	}
	
	function update() {
		$sql = "UPDATE plan SET nombre_plan = '".$this->nombre_plan."', tipo_plan = ".$this->tipo_plan.", valor = ".$this->valor.", fecha = '".$this->fecha."' WHERE id_plan = ".$this->id_plan;
		return $this->updatebd($sql);
	}
	
	function getPlanes() {
		$sql = "SELECT * FROM plan";
		$planes = array();
		$this->connectClass();
		$index = $this->query($sql);
		while($row = $this->fetch($index)) {
			$i = 0;
			$planes[] = new Plan($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $planes;
	}
	
	function getPlan($id_plan="") {
		$sql = "SELECT * FROM plan WHERE id_plan = ".$id_plan.";";
		$this->connectClass();
		$index = $this->query($sql);
		$plan = false;
		if($row = $this->fetch($index)) {
			$i = 0;
			$plan = new Plan($row[$i++],$row[$i++],$row[$i++],$row[$i++],$row[$i++]);
		}
		$this->close();
		return $plan;
	}
	}




?>