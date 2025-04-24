<?
function calculateSide($a = null, $b = null, $c = null) {
if ($a === null && $b !== null && $c !== null) {
return sqrt(pow($c, 2) - pow($b, 2));
} elseif ($b === null && $a !== null && $c !== null) {
return sqrt(pow($c, 2) - pow($a, 2));
} elseif ($c === null && $a !== null && $b !== null) {
return sqrt(pow($a, 2) + pow($b, 2));
} else {
throw new Exception("Invalid input. Please provide two sides.");
}
}
?>