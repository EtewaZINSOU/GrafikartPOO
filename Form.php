<?php
/**
 * Created by PhpStorm.
 * User: ALEXIS
 * Date: 14/05/15
 * Time: 12:25
 */

class Form {
	  private $data;
	  public $surround='p';

	  function __construct ($data)
	  {
			$this->data = $data;
	  }
	public function surround($html){
	  return "<{$this->surround}>{$html}<{$this->surround}>";
}
	  public function input($name){
			return $this->surround('<input type="text" name="'.$name.'" >');

	  }
	  public function submit(){
			return $this->surround('<button type="submit">Envoyer</button>');
	  }

} 