<?php
require_once '29.2_header.php';

echo <<<_END
<script>
function checkUser(user){
    if (user.value == ""){
        $('#used').html('&nbsp;')
        return
    }
    $.post(
        'checkuser.php',
        {user: user.value},
        function(data){
            $('#used').html(data)
        }
    )
}
</script>
_END;
$error = $user = $pass = "";
if (isset($_SESSION['user'])){
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
        $error = 'Not all fields were entered<br><br>';
    else{
        $result = queryMysql("SELECT * FROM members WHERE user = '$user'");

        if ($result->rowCount())
            $error = 'That username already exists<br><br>';
        else{
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die('<h4>Account created</h4>Please Log in.</div></html>');

        }
    }
}

echo <<<_END
    <form method="post" action="29.5_signup.php"?r="randstr">$error
    <div data-role="fieldcontain">
    <label></label>
    Please Enter your details to sign up
</div>
<label>Username</label>
<input type="text" maxlength="16" name="user" value="$user" onblur="checkUser(this)">
<label></label><div id="used">&nbsp;</div>
</div>
<div data-role="fieldcontain">
<label>Password</label>
<input type="text" maxlength="16" name="pass" value="$pass">
</div>
<div data-role="fieldcontain">
<label></label>
<input data_transition="slide" type="submit" value="Sign Up">
</div>
</div>
</body>
</html>
_END;



