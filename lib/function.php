<?php

function multiplication($x, $y)
{
	return $x * $y;
}

function division($x, $y)
{
	if ($y == 0)
		return "0 can't be divided";
	return $x / $y;
}

function addition($x, $y)
{
	return $x + $y;
}

function subtraction($x, $y)
{
	return $x - $y;
}

function action($filename, $operation)
{
	$results = [];
	foreach (readFileByName($filename) as $value) {
		array_push($results, calculate($operation, getValues($value)));
	}
	if (count($results) > 0) {
		return saveResults($results);
	}
	return 'test';
}

function getValues($value)
{
	$result = explode(' ', $value);
	return $result;
}

function calculate($operation, $values)
{
	$calculateFunction = "{$operation}";
	return $calculateFunction($values[0], $values[1]);
}
function readFileByName($filename)
{
	if (file_exists("files/" . $filename)) {
		$file = file("files/" . $filename);
		return $file;
	} else {
		throw new Exception('No such file was found.');
	}
}

function saveResults($results)
{
	clearFiles();
	foreach ($results as $result) {
		if ($result < 0) {
			file_put_contents('results/negatives.txt', $result . "\n", FILE_APPEND);
		} else {
			file_put_contents('results/positives.txt', $result . "\n", FILE_APPEND);
		}
	}
	return 'done';
}

function clearFiles()
{
	if (file_exists('results/negatives.txt'))
		unlink('results/negatives.txt');
	if (file_exists('results/positives.txt'))
		unlink('results/positives.txt');
	return;
}