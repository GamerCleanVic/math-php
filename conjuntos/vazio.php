<?php

class Universo{
	private string $item;

	function set_item(string $item){
		$this->item = $item;
	}
	function get_item(): string {
		return $this->item;
	}
}

