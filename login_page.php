<div class="modal fade text-center" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Log In</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    <div class="text-danger text-center"><h2 id="login_msg"></h2></div>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form autocomplete="on" action="student_login.php" method="post">

                        <div class="form-group">
                            <label for="roll_no">Roll No:</label>
                            <input type="text" class="form-control" id="login_roll_no" name="login_roll_no" placeholder="Enter your roll no." required="on">
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="login_psd" name="login_psd" placeholder="Enter your password" required="on">
                            
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Log in</button>
                        <button type="reset" class="btn btn-danger" name="login_reset">Reset</button>

                    </form> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

