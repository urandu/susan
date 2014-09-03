<div class="container top">


    <h4>Nurse menu</h4>
    <div class="navbar ">
        <div class="navbar-inner">
            <div class="container">

                <ul class="nav">
                    <li><a href="<? echo(base_url());?>triage">Triage</a></li>
                    <li><a href="<? echo(base_url());?>register_patient">Register patient</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-header">
        <h2>
            Triage: Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
        </h2>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>triage/save/<?php echo($visit[0]['visit_id']); ?>">
        <div class="control-group ">
            <label for="weight">Weight (kg)</label>

            <div class="controls">
                <input type="text" required id="weight" name="weight" value="<?php if(isset($visit[0]['weight'])){ echo($visit[0]['weight']);} ?>">
            </div>
        </div>

        <div class="control-group ">
            <label for="height">Height (Inches)</label>

            <div class="controls">
                <input type="text" required id="height" name="height" value="<?php if(isset($visit[0]['height'])){ echo($visit[0]['height']);} ?>">
            </div>
        </div>

        <div class="control-group ">
            <label for="blood_pressure">Blood pressure</label>

            <div class="controls">
                <input type="text" id="blood_pressure" name="blood_pressure" value="<?php if(isset($visit[0]['blood_pressure'])){ echo($visit[0]['blood_pressure']);} ?>">

            </div>
        </div>
        <div class="control-group ">
            <label for="temperature">Temperature (degrees celsius  )</label>

            <div class="controls">
                <input type="text" id="temperature" required name="temperature" value="<?php if(isset($visit[0]['temperature'])){ echo($visit[0]['temperature']);} ?>">
            </div>
        </div>
        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="save">
        </div>
    </form>

</div>
