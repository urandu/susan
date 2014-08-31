<div class="container top">



    <div class="row">
        <div class="span12 columns">

            <?php

            if (isset($message_error) && $message_error) {
                echo '<div class="alert alert-error">';
                echo '<a class="close" data-dismiss="alert">×</a>';
                echo '<strong>Not found.</strong> The patient with number does not exist please try again.';
                echo '</div>';
            }
            ?>

            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>triage/get_patient">
                <div class="control-group">
                    <label for="patient_id">Enter Patient number</label>
                    <div class="controls">
                        <input id="patient_id" name="patient_id">
                        <input type="submit" value="Next" class="btn btn-primary">

                    </div>
                </div>
                <div class="form-actions">

                </div>
            </form>


        </div>
    </div>