<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Maya health clinic</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar ">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">Maya health</a>
            <ul class="nav">



                <?php if($this->session->userdata('role')==0) {  ?>
                <li>
                    <a href="<?php echo(base_url()) ?>consultation">Home</a>

                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>consultation/list_patients_treated">patients served</a>
                </li>
                <?php } if($this->session->userdata('role')==1) { ?>
                <li>
                    <a href="<?php echo(base_url()) ?>register_patient">Home</a>

                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>triage">Home</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>triage/list_patients_treated">patients served</a>
                </li>
                <?php } if($this->session->userdata('role')==2) {  ?>
                <li>
                    <a href="<?php echo(base_url()) ?>lab">Home</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>lab/list_patients_treated">patients served</a>
                </li>
                <?php } if($this->session->userdata('role')==4) {   ?>
                <li>
                    <a href="<?php echo(base_url()) ?>finance">Home</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>finance/list_patients_treated">patients served</a>
                </li>
                <?php } if($this->session->userdata('role')==3) {   ?>

                <li>
                    <a href="<?php echo(base_url()) ?>pharmacy">Home</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>pharmacy/list_patients_treated">patients served</a>
                </li>
                <?php }?>
                <li>
                    <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
                </li>
                <li>
                    <a href="#">Logged in as <?php echo($this->session->userdata('user_name')); ?></a>
                </li>

            </ul>

        </div>
    </div>
</div>
