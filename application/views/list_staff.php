<div class="container top">

    <div class="page-header users-header">
        <h2>
            All staff
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

                            <th class="yellow header headerSortDown">Staff ID</th>
                            <th class="green header">Date of birth</th>
                            <th>ID number</th>
                            <th>role</th>
                            <th>Email</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($visit as $row) {

                            echo '<tr>';
                            echo '<td>' . $row['staff_id'] . '</td>';
                            echo '<td>' . $row['dob'] . '</td>';
                            echo '<td>' . $row['id_number'] . '</td>';
                            if($row['role']==0){echo '<td>Doctor</td>';}
                            if($row['role']==1){echo '<td>Nurse</td>';}
                            if($row['role']==2){echo '<td>Lab attendant</td>';}
                            if($row['role']==3){echo '<td>Pharmacist</td>';}
                            if($row['role']==4){echo '<td>Accountant</td>';}

                            echo '<td>' . $row['email'] . '</td>';


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