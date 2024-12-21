<!DOCTYPE html>
<html>
<head>
    <title>Testing PHP Server</title>
</head>
<body>
    <h1>Testing PHP Server</h1>
    <p>If you see this page, Server and PHP are working correctly.</p>

    <?php
    echo "<p>PHP version: " . phpversion() . "</p>";
    echo "<p>Current server time: " . date('Y-m-d H:i:s') . "</p>";
    ?>
</body>
</html>
