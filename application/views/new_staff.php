<div class="container top">


    <div class="page-header">
        <h2>
            New staff
        </h2>
    </div>

    <?php

    if (isset($flash_message) && $flash_message) {
        echo '<div class="alert alert-success">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Successfully created.</strong> ';
        echo '</div>';
    }
    ?>


    <form class="form-horizontal" method="post" action="<?php base_url() ?>new_staff/new_s">
        <div></div>
        <div class="control-group ">
            <label for="name">Names</label>

            <div class="controls">
                <input type="text" id="name" name="name">
            </div>
        </div>
        <div class="control-group ">
            <label for="dob">Date of Birth</label>

            <div class="controls">
                <input type="date" id="dob" name="dob">
            </div>
        </div>
        <div class="control-group ">
            <label for="email">Email</label>

            <div class="controls">
                <input type="email" id="email" name="email">
            </div>
        </div>
        <div class="control-group ">
            <label for="phone">Phone</label>

            <div class="controls">
                <input type="text" id="phone" name="phone">
            </div>
        </div>
        <div class="control-group ">
            <label for="gender">Gender</label>

            <div class="controls">
                <select id="gender" name="gender">
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                </select>
            </div>
        </div>
        <div class="control-group ">
            <label for="id_number">ID number</label>

            <div class="controls">
                <input type="text" id="id_number" name="id_number">
            </div>
        </div>
        <div class="control-group ">

            <label for="role">Role</label>

            <div class="controls">
                <select id="role" name="role">
                    <option value="0">Doctor</option>
                    <option value="1">Nurse</option>
                    <option value="2">lab attendant</option>
                    <option value="3">pharmacist</option>
                    <option value="4">accounts</option>
                </select>
            </div>
        </div>
        <div class="control-group ">
            <label for="password">Password</label>

            <div class="controls">
                <input type="password" id="password" name="password">
            </div>
        </div>
        <div class="control-group ">
            <label for="user_name">Username</label>

            <div class="controls">
                <input type="text" id="user_name" name="user_name">
            </div>
        </div>
        <div class="form-actions">
            <input type="submit" value="Submit">
        </div>

    </form>

</div>
