



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
    <div class="page-header users-header">
        <h2>
            <?php echo ucfirst($this->uri->segment(2)); ?>
            <a href="<?php echo site_url("admin") . '/' . $this->uri->segment(2); ?>/add" class="btn btn-success">Add a
                new</a>
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



                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                    <tr>

                        <th class="yellow header headerSortDown">Patient ID</th>
                        <th class="green header">Names</th>
                        <th class="red header">D.O.B</th>
                        <th class="red header">Gender</th>
                        <th class="red header">Residence</th>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    echo '<tr>';
                    echo '<td>' .$patient[0]['patient_id'] . '</td>';
                    echo '<td>' . $patient[0]['names'] . '</td>';
                    echo '<td>' .$patient[0]['dob'] . '</td>';
                    echo '<td>' .$patient[0]['gender'] . '</td>';
                    echo '<td>' .$patient[0]['residence'] . '</td>';

                    echo '<td class="crud-actions">
                  <a href="' . base_url() . 'triage/start_visit/'.$patient[0]['patient_id'] . '" class="btn btn-info">check in for visit</a>

                </td>';
                    echo '</tr>';

                    ?>
                    </tbody>
                </table>

            </div>



        </div>
        <?php }?>
    </div>