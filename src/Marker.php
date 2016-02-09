<?php
// src/Marker.php

namespace Template;

class Marker extends PaintTool
{
	public function paint()
	{
		$color = $this->getColor();
		echo "Painting with my {$color} color marker";
	}
}