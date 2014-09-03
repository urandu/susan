<div class="container top">


    <div class="page-header">
        <h2>
            New Patient
        </h2>
    </div>
    <form class="form-horizontal" method="post" action="register_patient/new_patient">
        <div></div>
        <div class="control-group ">
            <label for="names">Names</label>

            <div class="controls">
                <input required type="text" id="names" name="names">
            </div>
        </div>
        <div class="control-group ">
            <label for="dob">Date of Birth</label>

            <div class="controls">
                <input required type="date" id="dob" name="dob">
            </div>
        </div>
        <div class="control-group ">
            <label for="place_of_residence">Place of residence</label>

            <div class="controls">
                <input required type="text" id="place_of_residence" name="place_of_residence">
            </div>
        </div>
        <div class="control-group ">
            <label for="phone">Phone</label>

            <div class="controls">
                <input required type="text" id="phone" name="phone">
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

            <label for="marital_status">Marital status</label>

            <div class="controls">
                <select id="marital_status" name="marital_status">
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>
        </div>

        <div class="control-group ">
            <label  for="password">Password</label>

            <div class="controls">
                <input required type="password" id="password" name="password">
            </div>
        </div>
        <div class="control-group ">
            <label for="user_name">Username</label>

            <div class="controls">
                <input required type="text" id="user_name" name="user_name">
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" value="Submit">
        </div>

    </form>

</div>
