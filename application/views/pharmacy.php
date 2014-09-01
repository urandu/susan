<div class="container top">


    <div class="page-header">
        <h2>
            Pharmacy: <br/>  Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
        </h2>
    </div>
    <?php echo($visit[0]['doctor_prescription']); ?>
    </br>
    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>pharmacy/save/<?php echo($visit[0]['visit_id']); ?>">
        <div class="control-group ">
            <label for="total_amount">Total amount</label>

            <div class="controls">
                <textarea id="total_amount" name="total_amount"></textarea>
            </div>
        </div>


        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="Go to finance office">
        </div>
    </form>

</div>
