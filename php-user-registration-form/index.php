<?php
namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["register-user"])) {
    
    $username = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
    $displayName = filter_var($_POST["firstName"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["userEmail"], FILTER_SANITIZE_STRING);
    require_once ("Member.php");
    /* Form Required Field Validation */
    $member = new Member();
    $errorMessage = $member->validateMember($username, $displayName, $password, $email);
    
    if (empty($errorMessage)) {
        $memberCount = $member->isMemberExists($username, $email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertMemberRecord($username, $displayName, $password, $email);
            if (! empty($insertId)) {
                header("Location: thankyou.php");
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
}
?>
<html>
<head>
<title>PHP User Registration Form</title>
<link href="./css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <form name="frmRegistration" method="post" action="">
        <div class="demo-table">
        <div class="form-head">Sign Up</div>
            
<?php
if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo $message . "<br/>";
            }
            ?>
            </div>
<?php
}
?>
            <div class="field-column">
                <label>Username</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="userName"
                        value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" class="demo-input-box"
                    name="password" value=""></div>
            </div>
            <div class="field-column">
                <label>Confirm Password</label>
                <div>
                    <input type="password" class="demo-input-box"
                        name="confirm_password" value="">
                </div>
            </div>
            <div class="field-column">
                <label>Display Name</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="firstName"
                        value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>">
                </div>

            </div>
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="userEmail"
                        value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>">
                </div>
            </div>
            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>
    </form>
</body>
</html>