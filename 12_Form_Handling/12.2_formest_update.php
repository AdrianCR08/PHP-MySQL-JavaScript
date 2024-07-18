<?php
if (!empty(($_POST['name']))) $name = $_POST['name'];
else $name = "(Not entered)";

echo <<<_END
<html>
<head>
<title>Form Test</title>
</head>
<body>
Your Name is: $name<br>
<form method = "post" action = "12.2_formest_update.php">
What is you name?
<input type = "text" name = "name">
<input type = "submit">
</form>
</body>
</html>
_END;
?> 