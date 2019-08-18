<div class="modal fade text-center" id="contactModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Contact Now !</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    <div class="text-danger text-center"><h2 id="login_msg"></h2></div>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form autocomplete="off" action="contact.php" method="post">
                        
                        <div class="form-group">
                            <label for="Contact_name">Name:</label>
                            <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Enter your name." required="on">
                            
                        </div>

                        <div class="form-group">
                            <label for="roll_no">Roll No:</label>
                            <input type="text" class="form-control" id="contact_roll_no" name="contact_roll_no" placeholder="Enter your roll no." required="on">
                            
                        </div>
                        <div class="form-group">
                            <label for="con_whatsapp_no">WhatsApp No:</label>
                            <input type="tel" class="form-control" id="con_num" name="con_whatsApp_no" placeholder="Enter whatsapp number." required="on">
                            
                        </div>
                       
                        <div class="form-group">
                            <label for="con_msg">Message:</label>
                            <textarea class="form-control" id="con_msg" rows="5" name="con_msg" placeholder="Enter your message..." required="on"></textarea>
                            
                        </div>
                        <button type="submit" class="btn btn-success" name="con_msg_submit">Send</button>
                        <button type="reset" class="btn btn-danger" name="contact_reset">Reset</button>

                    </form> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

