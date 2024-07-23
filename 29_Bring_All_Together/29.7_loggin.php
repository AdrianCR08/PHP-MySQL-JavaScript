<?php
require_once '29.2_header.php';
$error = $user = $pass = "";

if (isset($_POST['user'])){
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass = "")
        $error = 'Not al fields were entered';
    else {
        $result = queryMysql("SELECT user, pass FROM memebers WHERE user = '$user' AND pass = '$pass'");

        if ($result ->rowCount()==0){
            $error = "Invalid login attempt";
        } else {
            $_SESSION['user'] = $user;
            $_SESSION['PASS'] = $pass;
            die("<div class='center'>You are now logged in. Please <a href='members.php?view=$user&r=randstr'>Click here</a>to continue.</div></div></body></html>");
        }
    }
}

echo <<<_END
<form method="post" action="29.7_loggin.php?r=$randstr">
<div data-role="fieldcontain">
<label></label>
<span class="error">$error</span>
</div>
<div data-role="fieldcontain">
<label></label>
Please enter you details to log in
</div>
<div data-role="#fieldcontain">
<label>Username</label>
<input type="text" maxlength="16" name = "pass" value="$pass">
</div>
<div data-role="fiedcontain">
<label>Password</label>
<input type="password" maxlength="16" name="pass" value="$pass">
</div>
<div data-role="fieldcontain">
<label></label>
<input data-transition="slide" type="submit" value="Login">
</div>
</form>
</div>
</body>
</html>
_END;