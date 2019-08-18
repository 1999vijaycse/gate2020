<div class="modal fade" id="profileModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="modal-title">Hi,<?php echo $_SESSION['name']; ?></h2>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <label>Name:</label><label><?php echo $_SESSION['name']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Roll No:</label><label><?php echo $_SESSION['roll_no']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Reg No:</label><label><?php echo $_SESSION['reg_no']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Branch:</label><label><?php echo $_SESSION['branch']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Semester:</label><label><?php echo "7th"; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>D.O.B.:</label><label><?php echo $_SESSION['dob']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Email ID:</label><label><?php echo $_SESSION['email']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Mobile No:</label><label><?php echo $_SESSION['mobile']; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p> You are successfully registered for GATE 2020 Classes of BCE Bhagalpur.</p>
                            </div>
                        </div>
                        <div class="col"> 
                             <button type="submit" class="btn btn-primary" name="changepss">Change Your Password.</button>
                        </div>
                        <div class="col">
                            <a name="logout" href = "logout.php">Log Out</a>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

