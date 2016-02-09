<?php
// src/Pen.php

namespace Template;

class Pen extends PaintTool
{
	public function paint()
	{
		$color = $this->getColor();
		echo "Writing with my {$color} color pen";
	}
}