 	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>




<!-- Modal ContactUs -->
<div class="modal fade" id="ModalContactUs" tabindex="-1" role="dialog" aria-labelledby="ModalContactUsTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalContactUsTitle">GET IN TOUCH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>CALL US</h6>
        <p>(+974) 5040 3234</p>
        <h6>EMAIL US</h6>
        <p>info@evolvemindbodysoul.com</p>
        

        <h6>OUR OFFICES</h6>
        <p>2nd Floor, Blue Tower (Regus Building)<br>
        Grand Hamad Street<br>
        P.O. Box: 39428<br>
        Doha<br>
        Qatar</p>

        
        
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



<!-- ModalFreeTrial -->
<div class="container">
  <div class="modal fade" id="ModalFreeTrial" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="" method="POST">
          <input type="hidden" name="subject" value="FullMoonYoga INQUIRY" />
          
          <div class="modal-header">
            <h3 class="modal-title">Full Moon Yoga</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            <div class="form-row">
              <div class="col-md-5">                
                <div class="form-group">
                  <label for="validationName">Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="validationName" name="name" placeholder="Enter name" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please enter your name.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputLocation">Location</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-map-marker"></i></span>
                    </div>
                    <select id="inputLocation" name="location" class="form-control" id="inputLocation" aria-describedby="inputGroupPrepend" required>
                      <!-- <option value="" selected="">Choose One:</option> -->
                      <!-- <option value="Grand Hyatt" selected="selected">Grand Hyatt</option> -->
                      <!-- <option value="Four Seasons Doha Hotel">Four Seasons Doha Hotel</option> -->
                      <option value="B/Attitude">B/Attitude</option>
                      <option value="Dynamik at Pearl">Dynamik at Pearl</option>
                      <option value="Airada Spa">Airada Spa</option>
                      <!-- <option value="The Westin">The Westin</option> -->
                      <!-- <option value="Warwick">Warwick</option> -->
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="validationEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="validationEmail" name="email" placeholder="Enter email" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="validationCompany">Company</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-briefcase"></i></span>
                    </div>
                    <input type="text" class="form-control" id="validationCompany" name="company" placeholder="Enter company" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please enter your Company.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="validationContact">Contact</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="text" class="form-control" id="validationContact" name="contact" placeholder="Enter Contact" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please enter your Contact.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="request">Message:</label>
                  <textarea name="request" class="form-control" rows="9" cols="25" required="required" placeholder="Request"></textarea>
                </div>
              </div>
            </div>               
            <div class="clear"></div>
          </div>

          <div class="modal-footer">
             <button type="submit" class="btn" name="submit">Signup</button>
          </div>

        </form>
      </div>
    </div>
  </div>  
</div>