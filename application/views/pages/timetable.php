    <div class="text-motion">          
      <div class="container">
        <div class="row">
          <div class='animatedParent'>
            <span class='animated bounceInUp'>LIFT.</span>
            <div class="clear"></div>
            <span class='animated bounceInDown'>SQUAT</span>
            <div class="clear"></div>
            <span class='animated bounceInUp'>RUN.</span>
            <div class="clear"></div>
            <span class='animated bounceInDown'>REPEAT.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section id="pages">
  <div class="parallax-img" data-parallax="scroll" data-image-src="">
    <div class="content-box text-center">
      <div class='animatedParent' data-sequence='500'>              
        <div class="container">
          <div class="row align-items-center">
            <div class="col">
              <img src="<?php //echo base_url('assets'); ?>/img/body/img-7.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<section id="pages">
  <div class="parallax-green" data-parallax="scroll" data-image-src="">
    <div class="content-box">

      <div class="container">
        <div class="row">
          <div class="box-timetable">
            <div id="filters" class="filters button-group container">
              <button data-filter="*" class="filter button is-checked">All</button>
              <button data-filter=".Sunday" class="filter button">SUNDAY</button>
              <button data-filter=".Monday" class="filter button">MONDAY</button>
              <button data-filter=".Tuesday" class="filter button">TUESDAY</button>
              <button data-filter=".Wednesday" class="filter button">WEDNESDAY</button>
              <button data-filter=".Thursday" class="filter button">THURSDAY</button>
              <button data-filter=".Friday" class="filter button">FRIDAY</button>
              <button data-filter=".Saturday" class="filter button">SATURDAY</button>
            </div>
          </div>
        </div>
      </div>

      <section id="timetable" class="isotope">
      <?php
        foreach($booked as $row){
      ?>
        <div class="mix <?php echo $row->booked_day; ?> element-item col-md-3 col-sm-4 col-xs-12" data-category="schedule">
          <div class="box-frame">
            <?php 
              switch ($row->class_title) {
                case '1':
                  $img = "img-yoga-yinyang";
                  break;
                case '2':
                  $img = "img-boxing-fitness";
                  break;
                case '3':
                  $img = "img-muaythai-pmtsc";
                  break;
                case '4':
                  $img = "img-muaythai-padworks";
                  break;
                case '5':
                  $img = "img-muaythai-sf";
                  break;
                case '6':
                  $img = "img-zumba";
                  break;
                case '7':
                  $img = "img-muaythai-k46";
                  break;
                case '8':
                  $img = "img-muaythai-k79";
                  break;
                case '9':
                  $img = "img-yoga-vinyasa";
                  break;
                case '10':
                  $img = "img-pilates-mat";
                  break;
                case '11':
                  $img = "img-bodytone";
                  break;
                case '12':
                  $img = "img-yoga-hatha";
                  break;
                case '13':
                  $img = "img-muaythai-dbs";
                  break;
                case '14':
                  $img = "img-yoga-ashtanga";
                  break;
                case '15':
                  $img = "img-yoga-power";
                  break;
                case '16':
                  $img = "img-toneitup";
                  break;
                case '17':
                  $img = "img-toneitup";
                  break;
                case '18':
                  $img = "img-muaythai-cs";
                  break;
                case '19':
                  $img = "img-physiofit";
                  break;
                case '20':
                  $img = "img-hiit";
                  break;
                case '21':
                  $img = "img-yoga-mindful";
                  break;
                case '22':
                  $img = "img-muaythai-cpia";
                  break;
                case '23':
                  $img = "img-yoga-yin";
                  break;
                case '24':
                  $img = "img-yoga-mysore";
                  break;
                case '25':
                  $img = "img-yoga-muaythai";
                  break;
                case '26':
                  $img = "img-yoga-bp";
                  break;
                case '27':
                  $img = "img-bodyrock";
                  break;
                case '28':
                  $img = "img-muaythai-fundamentals";
                  break;
                case '29':
                  $img = "img-muaythai-ts";
                  break;
                case '30':
                  $img = "img-muaythai-k49";
                  break;
                
                default:
                  $img = "img-blank";
                  break;
              }
            ?>
            <div class="<?php echo $img; ?>">
              <span class="title"><a href="#" data-toggle="modal" data-target="#Modal-<?php echo $row->id; ?>"><?php echo $row->class_title; ?></a></span>
              <span><?php echo $row->class_subtitle; ?></span>
              <span><?php echo $row->type; ?></span>
              <span><?php echo $row->booked_time; ?></span>
              <span><?php echo $row->location; ?></span>
            </div>
          </div>
        </div>
      <?php } ?>      
      </section>        
      
    </div>
    <div class="download text-center">
      <a href="#"><button class="btn-default">Download Timetable</button></a>
    </div>
  </div>
</section>



















<div class="img-opt"> 
<?php
  foreach($booked as $row){
?> 
  <div class="modal fade" id="Modal-<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalRef-<?php echo $row->id; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalRef-<?php echo $row->id; ?>"><?php echo $row->class_title; ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row"><span><?php echo $row->class_subtitle; ?></span></div>
            <div class="row"><span><i><?php echo $row->type; ?></i></span></div>
            <div class="row d-flex justify-content-center">
              <img src="<?php echo base_url().$row->ins_image; ?>" alt="">
            </div>
            <div class="row"><p><?php echo $row->class_desc; ?></p></div>
            <div class="row">
              <ul>
                <li><b>Instructor:</b> <?php echo $row->ins_name; ?></li>
                <li><b>Title:</b> <?php echo $row->ins_title; ?></li>
                <li><b>Location:</b> <?php echo $row->location; ?></li>
                <li><b>Price:</b> <?php echo $row->ins_price; ?>QR</li>
                <li><b>Call:</b> <?php echo $row->phone; ?> to book your session</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>
<?php } ?>
</div>