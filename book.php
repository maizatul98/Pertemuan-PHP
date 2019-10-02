<?php

class Book {
	public $title,
		   $writer,
		   $publisher,
		   $price;

public function __construct( $title = "title", $writer = "writer", $publisher = "publisher", $price = 0){

	$this->title = $title;
	$this->writer = $writer;
	$this->publisher = $publisher;
	$this->price = $price;

}

public function getLabel(){
	return "$this->writer, $this->publisher";
}
}
?>