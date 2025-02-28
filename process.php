<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['a'], $_GET['b'], $_GET['c'], $_GET['d'], $_GET['e'])) {
    // Retrieve input values
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];
    $e = $_GET['e'];
    
    // Construct the command to call Python script
    $command = escapeshellcmd("python3 data_management.py a=$a b=$b c=$c d=$d e=$e");
    $output = shell_exec($command);
    
    // Display formatted output
    echo "<html><body>";
    echo "<h2>Processed Data Output</h2>";
    echo "<div style='border:1px solid #000; padding:10px; margin:10px; background:#f9f9f9;'>";
    echo $output;
    echo "</div>";
    echo "</body></html>";
} else {
    echo "<p>Error: Missing parameters.</p>";
}
?>