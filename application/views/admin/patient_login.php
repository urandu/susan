<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Login|Patient</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar ">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">Maya health</a>
            <ul class="nav">
                <li><a href="<?php echo(base_url()); ?>admin/login">Staff login</a></li>
            </ul>

        </div>
    </div>
</div>

<div class="container login">
    <h4>patient login</h4>
    please login to continue
    <?php
    $attributes = array('class' => 'form-signin');
    echo form_open('patient/patient_validate_credentials', $attributes);
    echo '<h2 class="form-signin-heading">Login</h2>';
    echo form_input('user_name', '', 'placeholder="Username"');
    echo form_password('password', '', 'placeholder="Password"');

    if (isset($message_error) && $message_error) {
        echo '<div class="alert alert-error">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
        echo '</div>';
    }
    echo "<br />";

    echo "<br />";
    echo "<br />";
    echo form_submit('submit', 'Login', 'class="btn btn-large btn-primary"');
    echo form_close();
    ?>
</div>
<!--container-->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>    
    