<div class="modal fade text-center" id="feedbackModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Feedback Now !</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    <div class="text-danger text-center"><h2 id="login_msg"></h2></div>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form autocomplete="off" action="feedback.php" method="post">
                        
                        
                        <div class="form-group">
                            <label for="feedback_msg">Feedback Message:</label>
                            <textarea class="form-control" id="feedback_msg" rows="7" name="feedback_msg" placeholder="Please share your experience about this website..." required="on"></textarea>
                            
                        </div>
                        <button type="submit" class="btn btn-success" name="feed_msg_submit">Send</button>
                        <button type="reset" class="btn btn-danger" name="feed_reset">Reset</button>

                    </form> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

