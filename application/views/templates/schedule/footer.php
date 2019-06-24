  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url('assets'); ?>/js/jquery-3.2.1.slim.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/js/popper.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/js/css3-animate-it.js"></script>
  <script src="<?php echo base_url('assets'); ?>/js/parallax.js"></script>

  <!-- added -->
  <script src="<?php echo base_url('assets'); ?>/js/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/js/filtering.js"></script>
  <!-- end -->
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
          <input type="hidden" name="subject" value="Free Trial INQUIRY" />
          
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

<!-- email -->
<?php
  if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $location = $_POST['location'];
    $company = $_POST['company'];
    $classes = $_POST['classes'];
    $request= $_POST['request'];
    $subject = $_POST['subject'];

    #promocode
    // $promocode = $_POST['promocode']; disabled - promo ended

    $to = $email;
    $subject = $subject;

    switch ($subject) {

      case 'FullMoonYoga INQUIRY':
        $class = "Free Trial INQUIRY";
        break;

      default:
        $class = "";
        break;
    }


    #------------------------------------------------------------------------------------
    $message ="
      <table bgcolor='292c34' border='0' cellpadding='0' cellspacing='0' width='1000' align='center'>
        <tr>
          <td><br><br><br></td>
        </tr>
        <tr>
          <td>
            <table bgcolor='24242c' border='0' cellpadding='0' cellspacing='0' width='800' align='center'>
              <tr>
                <td align='left' width='40%'><a href='http://www.evolvemindbodysoul.com' target='_blank'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/logo.jpg' alt=' border='0'></a></td>
                <td bgcolor='24242c' width='60%' align='right'>
                  <ul style='color:#FFFFFF;font-size:12px;'>
                    <li style='display:inline;padding-right:10px;border-right:1px solid #FFFFFF;'><a href='http://www.evolvemindbodysoul.com/web/en/we-are-evolve' target='_blank' style='color:#FFFFFF;text-decoration:none;'>WE ARE EVOLVE</a></li>
                    <li style='display:inline;padding-right:10px;border-right:1px solid #FFFFFF;padding-left:10px;'><a href='http://www.evolvemindbodysoul.com/web/en/contact' target='_blank' style='color:#FFFFFF;text-decoration:none;'>GET IN TOUCH</a></li>
                    <li style='display:inline;padding-right:20px;padding-left:10px;'><a href='http://www.evolvemindbodysoul.com/web/en/events' target='_blank' style='color:#FFFFFF;text-decoration:none;'>EVENTS</a></li>
                  </ul>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table bgcolor='#ffffff' border='0' cellpadding='20' cellspacing='0' width='800' align='center'>
              <tr>
                <td>

                  <table bgcolor='#33ccff' border='1' cellpadding='5' cellspacing='1' width='400' align='left'>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;' width='100'>Category:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$class."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Name:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$name."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Email:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$email."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Contact:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$contact."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Location:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$location."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Classes:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$classes."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Company:</th>
                      <td bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>".$company."</td>
                    </tr>
                    <tr>
                      <th align='left' bgcolor='#ffffff' style='font-size: 11px;font-family: tahoma;'>Request:</th>
                      <td bgcolor='#ffffff'>".$request."</td>
                    </tr>
                  </table>

                </td>
              </tr>
              <tr>
                <td>
                  <p>Thank you for signing up the ".$class." Our support representative will check your inquiry and forward to the best person when necessary. We'll get back to you within the day.</p>
                  <p>You can also reach us via live chat on www.facebook.com/EvolveQatar or whatsapp call +974 50403234.</p>
                </td>
              </tr>
              <tr>
                <td>                  
                  <p>Best Regards,<br/>Evolve</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <table bgcolor='#24242c' border='0' cellpadding='0' cellspacing='0' width='800' align='center'>
              <tr>
                <td align='left' width='40%'><a href='http://www.evolvemindbodysoul.com' target='_blank'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/logo.jpg' alt=' border='0'></a></td>
                <td align='left' width='40%'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/img07.jpg' alt=' border='0'></td>
                <td bgcolor='#24242c' width='20%'>
                  <table bgcolor='#24242c' border='0' cellpadding='0' cellspacing='0' width='100%' align='center'>
                    <tr>
                      <td align='center'><a href='https://www.facebook.com/evolveqatar/' target='_blank'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/fb.png' alt=' border='0' width='24'></a></td>
                      <td align='center'><a href='https://twitter.com/EvolveQatar' target='_blank'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/twitter.png' alt=' border='0' width='24'></a></td>
                      <td align='center'><a href='#' target='_blank'><img style='display: block;' src='http://www.evolvemindbodysoul.com/campaign/default/dribble.png' alt=' border='0' width='24'></a></td>
                    </tr>
                  </table>  
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td><br><br><br></td>
        </tr>
      </table>";


    // $header = "From:info@evolvemindbodysoul.com \r\n";
    // $header .= "Cc:o.toledo@evolvemindbodysoul.com \r\n";
    // $header .= "Cc:h.khalid@evolvemindbodysoul.com \r\n";
    $header = "From:niel.evolvemindbodysoul@gmail.com \r\n";
    // $header .= "Cc:niel.evolvemindbodysoul@gmail.com \r\n";
    $header .= "Cc:fajardolawrence@gmail.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    if(!empty($class)){
      $retval = mail ($to,$subject,$message,$header);
    }
     
    if( $retval == true ) {
      echo "<p>Thank you for signing up the ".$class." Our support representative will check your inquiry and forward to the best person when necessary. We'll get back to you within the day.</p> <br><br> <p>You can also reach us via live chat on www.facebook.com/EvolveQatar or whatsapp call +974 50403234.</p>";
    }else {
      echo "";
    }
    // unset
    unset($class);
  }
  ?>