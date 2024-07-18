<?php
echo <<<_END
<form method = "post" action = "12.3_Default_Values.php"><pre>
Loan Amount <input type = "text" name = "principal">
Number of Years <input type = "text" name = "years" value = "15">
Interest Rate <input type="text" name = "interest" value = "3">
<input type="submit">
</pre>
</form>
_END;