<?php
// src/PaintTool.php

namespace Template;

abstract class PaintTool
{
	private $color;
	
	public function __construct($color = 'black')
	{
		$this->color = $color;
	}

	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}
	abstract public function paint();
}