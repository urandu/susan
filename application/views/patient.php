<div class="container top">

    <div class="page-header users-header">
        <h2>
            Medical history
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
                    echo '<strong>welcome</strong> ';
                    echo '</div>';
                }
                ?>

                <?php if(isset($visit)){ ?>
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                        <tr>

                            <th class="yellow header headerSortDown">Visit_id</th>
                            <th class="green header">Date</th>
                            <th>Diagnosis</th>
                            <th>Prescription</th>
                            <th>Lab test(s) done</th>
                            <th>Lab results</th>
                            <th>Amount paid (KSh.)</th>
                            <th>Date of next appointment</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($visit as $row) {

                            echo '<tr>';
                            echo '<td>' . $row['visit_id'] . '</td>';
                            echo '<td>' . $row['time_started'] . '</td>';
                            echo '<td>' . $row['doctor_diagnosis'] . '</td>';
                            echo '<td>' . $row['doctor_prescription'] . '</td>';
                            echo '<td>' . $row['lab_test_to_be_conducted'] . '</td>';
                            echo '<td>' . $row['lab_test_results'] . '</td>';
                            echo '<td>' . $row['total_amount_paid'] . '</td>';
                            echo '<td>' . $row['next_visit'] . '</td>';

                            /*echo '<td class="crud-actions">
                  <a href="' . base_url() . '/pharmacy/consult/' . $row['visit_id'] . '" class="btn btn-info">check in</a>';*/



                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>

                <?php } else { echo("<h5> No records found</h5>");}  ?>

            </div>



        </div>
        <?php }?>
    </div>