<div class="container top">

    <div class="page-header">
        <h2>
            Finance: <br/>  Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
        </h2>
    </div>
    <h5>Total amount to be paid in KSh.</h5>
    <?php echo($visit[0]['total_amount_to_be_paid']); ?>
    </br>
    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>finance/save/<?php echo($visit[0]['visit_id']); ?>">
        <div class="control-group ">
            <label for="total_amount_paid">total amount</label>

            <div class="controls">
                <textarea id="total_amount_paid" name="total_amount_paid"></textarea>
            </div>
        </div>


        <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="return to pharmacy">
        </div>
    </form>

</div>
