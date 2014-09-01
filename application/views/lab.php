<div class="container top">



    <div class="page-header">
        <h2>
            Pharmacy: <br/>  Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
        </h2>
    </div>
    <h5>Tests to be done</h5>
    <?php echo($visit[0]['lab_test_to_be_conducted']); ?>
    </br>
    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>lab/save/<?php echo($visit[0]['visit_id']); ?>" >
        <div class="control-group ">
            <label for="lab_results">Lab results</label>

            <div class="controls">
                <textarea id="lab_results" name="lab_results"> <?php echo($visit[0]['lab_test_results']); ?></textarea>
            </div>
        </div>


        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="return to doctor">
        </div>
    </form>

</div>
