<div id="lab" class="modal fade hide" data-backdrop="true">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4> Lab test</h4>
    </div>
    <div class="modal-body">
        <div class=" clearfix">
            <form class="form-horizontal">
                <div class="control-group ">
                    <label for="lab_test">Lab test to be conducted</label>

                    <div class="controls ">
                        <textarea rows="8" id="lab_test" name="lab_test"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                </div>
            </form>

        </div>


    </div>

</div>


<div id="prescription" class="modal fade hide" data-backdrop="true">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4> Write prescription</h4>
    </div>
    <div class="modal-body">
        <div class=" clearfix">
            <form class="form-horizontal">
                <div class="control-group ">
                    <label for="prescription">Prescription</label>

                    <div class="controls ">
                        <textarea id="prescription" name="prescription"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                </div>
            </form>
        </div>


    </div>

</div>


<div id="notes" class="modal fade hide" data-backdrop="true">
    <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4> Doctor`s notes</h4>
    </div>
    <div class="modal-body">
        <div class=" clearfix">
            <form class="form-horizontal">
                <div class="control-group ">
                    <label for="doctors_notes">Doctors notes</label>

                    <div class="controls ">

                        <textarea rows="8" id="doctors_notes" name="doctors_notes"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label for="diagnosis">Diagnosis</label>

                    <div class="controls">
                        <textarea rows="8" id="diagnosis" name="diagnosis"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary" type="submit" value="Save">
                    <a href="#" class="btn" data-dismiss="modal">Close</a>
                </div>

            </form>
        </div>


    </div>

</div>

<div class="container top">


    <div class="page-header">
        <h2>
            Doctor consultation.
        </h2>
    </div>
    <div class="nav">

        <nav class="navbar">
            <ul>
                <li>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#notes">Doctor`s notes</button>
                </li>
                <li>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#prescription">Write prescription
                    </button>
                </li>
                <li>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#lab">Recommend lab test</button>
                </li>
            </ul>
        </nav>
    </div>


</div>
