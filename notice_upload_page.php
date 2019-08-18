<!-- The student registration  Modal -->
    <div class="modal fade" id="notice_upload_Modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Important Notice Upload !</h4>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="notice_upload.php" method="post" enctype="multipart/form-data">  

                        <div>
                            <label for="name">Select PDF File:</label>
                            <input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf">
                        </div>
                         <div>
                        <label for="Description">Notice Description:</label>
                        <textarea class="form-control" rows="3" id="notice_description" name="notice_discription" placeholder="Enter discription about notice...."></textarea>
                      </div> 
                            <button type="submit" class="btn btn-success" name="upload_now">Upload Now!</button>
                            <span id="notice_err" class="error"></span>

                    </form> 
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
