<!-- The student registration  Modal -->
    <div class="modal fade" id="joinModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Final Year Student Registration !</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form onsubmit="return validateForm()" autocomplete="off" action="student_registration.php" method="post">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name." autofocus="on">
                            <span id="name_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="roll_no">Roll No:</label>
                            <input type="text" class="form-control" id="roll_no" name="roll_no" placeholder="Enter your roll no.">
                            <span id="roll_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="reg_no">Registration No:</label>
                            <input type="text" class="form-control" id="reg_no" name="reg_no" placeholder="Enter your reg no.">
                            <span id="reg_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="branch">Branch:</label>
                            <select id="branch" class="form-control" name="branch">
                                <option selected>Select Your Branch:</option>
                                <option >CSE</option>
                                <option >ECE</option>
                                <option >EE</option>
                                <option >CE</option>
                                <option >ME</option>
                            </select>
                            <span id="branch_err" class="error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="role">Role:</label>
                            <select id="role" class="form-control" name="role">
                                <option selected>Select Your Role:</option>
                                <option >Student</option>
                                <option >Gate2020 Coordinator</option>
                            </select>
                            <span id="role_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="text" class="form-control" id="dob" name="dob" placeholder="DOB only DD/MM/YYYY format.">
                            <span id="dob_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email id.">
                            <span id="email_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="mobile_no">Mobile No:</label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile no.">
                            <span id="mobile_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <button class="btn" data-toggle="popover" title="" data-placement="top"
                                    data-content="Password length is minimum 3 or maximum 15 char. 
                                    You password should have [A-Z] or [a-z] or [0-9] or [!@#$%^*/-+.] or all."> Click Me!</button>
                            <input type="password" class="form-control" id="psd" name="psd" placeholder="Create password of 3 to 15 char.">
                            <span id="psd_err" class="error"></span>
                        </div>

                        <div class="form-group">
                            <label for="cnfpassword">Confirm Password:</label>
                            <input type="password" class="form-control" id="cnfpsd" name="cnfpsd" placeholder="Re-Enter your password.">
                            <span id="cnfpsd_err" class="error"></span>
                        </div>

                        <button type="submit" class="btn btn-primary" name="reg_submit">Submit</button>
                        <button type="reset" class="btn btn-danger" name="reset">Reset</button>

                    </form> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
