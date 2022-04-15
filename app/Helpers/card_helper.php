<?php

function cardChunk(array $array, int $column_size)
{
	if (count($array) < 1) return [];

	$chunk_size = ceil(count($array) / $column_size);
	return array_chunk($array, $chunk_size);
}
