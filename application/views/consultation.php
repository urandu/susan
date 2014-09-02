<div id="lab" class="modal fade hide" data-backdrop="true">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4> Lab results</h4>
    </div>
    <div class="modal-body">
        <div class=" clearfix">


            <?php if(isset($visit[0]['lab_test_results']))
            {
                echo ($visit[0]['lab_test_results']);
            } ?>
        </div>


    </div>

</div>



<div id="patient_info" class="modal fade hide" data-backdrop="true">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4> Patient information</h4>
    </div>
    <div class="modal-body">
        <div class=" clearfix">


           Name: <?php echo($patient[0]['names']); ?></br>
           Date of birth:<?php echo($patient[0]['dob']); ?></br>
           Weight: <?php echo($visit[0]['weight']); ?> kg</br>
           Height: <?php echo($visit[0]['height']); ?> inches</br>
           Residence: <?php echo($patient[0]['residence']); ?></br>
        </div>


    </div>

</div>



<div class="container top">



        <div class="page-header">
            <h2>
                Doctor consultation: Patient name:<?php echo($patient[0]['names']); ?> <br/>  Patient ID:<?php echo($visit[0]['patient_id']); ?><br/> Visit ID:<?php echo($visit[0]['visit_id']); ?>.
            </h2>
        </div>







    <div class="nav">

        <nav class="navbar">
            <ul>
                <li>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#patient_info">Patient details</button>
                </li>
                <?php if(isset($visit[0]['lab_test_results']))
                { ?>
                    <li>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#lab">view lab results</button>
                    </li>
               <?php } ?>


            </ul>
        </nav>
    </div>



    <form class="form-horizontal" method="post" action="<?php echo(base_url()); ?>consultation/save/<?php echo($visit[0]['visit_id']); ?>">


        <div class="control-group ">
            <label for="doctors_notes">Doctors notes</label>

            <div class="controls ">

                <textarea cols="10" id="doctors_notes" name="doctors_notes"><?php if(isset($visit[0]['doctors_notes'])){ echo($visit[0]['doctors_notes']);} ?></textarea>
            </div>
        </div>

        <div class="control-group">
            <label for="diagnosis">Diagnosis</label>

            <div class="controls">
                <textarea cols="10" id="diagnosis" name="diagnosis"><?php if(isset($visit[0]['doctor_diagnosis'])){ echo($visit[0]['doctor_diagnosis']);} ?></textarea>
            </div>
        </div>

        <div class="control-group ">
            <label for="prescription">Prescription</label>

            <div class="controls ">
                <textarea cols="10" id="prescription" name="prescription"><?php if(isset($visit[0]['doctor_prescription'])){ echo($visit[0]['doctor_prescription']);} ?></textarea>
            </div>
        </div>

        <div class="control-group ">
            <label for="lab_test">Lab test to be conducted</label>

            <div class="controls ">
                <textarea cols="10" id="lab_test" name="lab_test"><?php if(isset($visit[0]['lab_test_to_be_conducted'])){ echo($visit[0]['lab_test_to_be_conducted']);} ?></textarea>
            </div>
        </div>

        <div class="control-group ">
            <label for="next_visit">Next appointment</label>

            <div class="controls ">
                <input id="next_visit" type="date" name="next_visit" value="<?php if(isset($visit[0]['next_visit'])){ echo($visit[0]['next_visit']);} ?>">
            </div>
        </div>

        <div class="form-actions">
            <input class="btn btn-primary" type="submit" name="next" value="send to pharmacy">
            <input class="btn btn-primary" type="submit" name="next" value="send to laboratory">
        </div>
    </form>



















</div>
