<?php
$marks = [50,40,35,45,27];
$total = array_sum($marks);
$percentage = ($total/250)*100;
$result = ($percentage>=33) ? "Passed" : "Failed";

echo "<h2>Name : XYZ</h2>";
echo "<table border='1' cellpadding='5'>
<tr><th>Subject</th><th>Max Marks</th><th>Obtained Marks</th></tr>";
for($i=0;$i<5;$i++){
    echo "<tr><td>Sub".($i+1)."</td><td>50</td><td>".$marks[$i]."</td></tr>";
}
echo "<tr><td colspan=2>Total</td><td>$total</td></tr>";
echo "<tr><td colspan=2>Percentage</td><td>".round($percentage,2)."%</td></tr>";
echo "<tr><td colspan=2>Result</td><td>$result</td></tr>";
echo "</table>";
?>