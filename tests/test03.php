<?php
/*
 * This is example of array access usage of CSstats class
 */

// include class
require_once("../class/csstats.class.php");

// create CSstats object
$stats = new CSstats('csstats0x0b.dat');

echo "<table border='1'>\n<tr><th>Position</th><th>Nick</th><th>kills</th><th>deaths</th></tr>\n";

for ($i = 1; $i<= $stats->countPlayers(); $i++)
	echo "<tr><td>{$i}</td>".
		"<td>".htmlentities($stats[$i]['nick'])."</td>".
		"<td>{$stats[$i]['kills']}</td>".
		"<td>{$stats[$i]['deaths']}</td></tr>";

echo "</table>";

