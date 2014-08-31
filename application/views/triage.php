<div class="container top">


    <div class="page-header">
        <h2>
            Triage: Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
        </h2>
    </div>
    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>triage/save<?php echo($visit[0]['visit_id']); ?>">
        <div class="control-group ">
            <label for="weight">Weight</label>

            <div class="controls">
                <input type="text" id="weight" name="weight" value="<?php if(isset($visit[0]['weight'])){ echo($visit[0]['weight']);} ?>">
            </div>
        </div>

        <div class="control-group ">
            <label for="height">Height</label>

            <div class="controls">
                <input type="text" id="height" name="height" value="<?php if(isset($visit[0]['height'])){ echo($visit[0]['height']);} ?>">
            </div>
        </div>

        <div class="control-group ">
            <label for="blood_pressure">Blood pressure</label>

            <div class="controls">
                <input type="text" id="blood_pressure" name="blood_pressure" value="<?php if(isset($visit[0]['blood_pressure'])){ echo($visit[0]['blood_pressure']);} ?>">

            </div>
        </div>
        <div class="control-group ">
            <label for="temperature">Temperature</label>

            <div class="controls">
                <input type="text" id="temperature" name="temperature" value="<?php if(isset($visit[0]['temperature'])){ echo($visit[0]['temperature']);} ?>">
            </div>
        </div>
        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="save">
        </div>
    </form>

</div>
