<div class="container top">

    <div class="page-header users-header">
        <h2>
            Patients you have served
        </h2>
    </div>

    <?php

    if (isset($message_error) && $message_error) {
        echo '<div class="alert alert-error">';
        echo '<a class="close" data-dismiss="alert">×</a>';
        echo '<strong>Visit is already active.</strong>';
        echo '</div>';
    }else{
    ?>
    <div class="row">
        <div class="span12 columns">
            <div class="well">


                <?php

                if (isset($flash_message) && $flash_message) {
                    echo '<div class="alert alert-success">';
                    echo '<a class="close" data-dismiss="alert">×</a>';
                    echo '<strong>Successfully saved.</strong> you may now serve the next patient.';
                    echo '</div>';
                }
                ?>

                <?php if(isset($visit)){ ?>
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                        <tr>

                            <th class="yellow header headerSortDown">Patient Name</th>
                            <th class="green header">Date</th>
                            <th>Diagnosis</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($visit as $row) {
                            $pname=get_patient_name($row['patient_id']);
                            echo '<tr>';
                            echo '<td>' . $pname[0]['names'] . '</td>';
                            echo '<td>' . $row['time_started'] . '</td>';
                            echo '<td>' . $row['patient_id'] . '</td>';


                            /*echo '<td class="crud-actions">
                  <a href="' . base_url() . '/pharmacy/consult/' . $row['visit_id'] . '" class="btn btn-info">check in</a>';*/


                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>

                <?php } else { echo("<h5> No patients found</h5>");}  ?>

            </div>



        </div>
        <?php }?>
    </div>