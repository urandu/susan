<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>CodeIgniter Admin Sample Project</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar ">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand">Project Name</a>
            <ul class="nav">

                <li>
                    <a href="<?php echo(base_url()) ?>consultation">consultation</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>register_patient">registration</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>triage">Triage</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>lab">Laboratory</a>
                </li>
                <li>
                    <a href="<?php echo(base_url()) ?>finance">Finance office</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
