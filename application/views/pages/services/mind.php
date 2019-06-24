		<div class="container-fluid bg-yellow">
            <div class="row">
            	<div class="col-md-12">
	                <div class="sub-links">
		                <div class="container">
		                    <div class="row">
			                    <ul>
			                    	<?php
			                    		foreach ($sublinks as $row) {
			                    	?><li>
                              <a href="#" data-toggle="modal" data-target="#<?php echo $row->image; ?>"><?php echo ucwords($row->title); ?></a>
                            </li>
			                    	<?php } ?>
			                    </ul>
		                    </div>
		                </div>
	                </div>
            	</div>
            </div>
        </div>
    </div>
    <div class="text-motion">          
      <div class="container">
        <div class="row">
          <div class='animatedParent mx-auto'>
            <span class='animated bounceInUp'>GET IN THE FLOW</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="pages">
    <div class="parallax-gray" data-parallax="scroll" data-image-src="">
	    <div class="content-box text-center">
	        <div class='animatedParent' data-sequence='50'>
		        <div class="container">
		            <div class="row align-items-center">
		                <div class="d-flex align-content-center flex-wrap">
		            	<?php
                    		foreach ($sublinks as $row) {
                    	?>
								<div class="animated fadeInRightShort" data-id="">
									<div class="box-class">
										<div class="card ">
											<a href="#" data-toggle="modal" data-target="#<?php echo $row->image; ?>"><img class="card-img-top blank" src="<?php echo base_url('assets').'/img/sublinks/mind/'.$row->image.'.jpg' ?>" alt="Card image"></a>
											<div class="card-footer bg-yellow">
											  	<?php echo ucwords($row->title); ?>
										  	</div>
										</div>
									</div>
								</div>
                    	<?php } ?>
		                </div>
		            </div>
		        </div>
		        <div class="container">
		        	<div class="row align-items-center">
		        		<div class="col">
		        			<h3>MIND</h3>
		        			<p>
		        				Keeping your Mind in shape is a must, mental fitness means keeping your brain and emotional health in tip-top shape. Take care of your brain and it will take care of you! We have developed an array of classes to help you have a healthy <b>Mind</b> such as practicing different types of yoga should lead to a more connected life with one's self and the rest of the world.
		        			</p>
		        		</div>
		        	</div>
		        </div>
	        </div>
	    </div>
    </div>
</section>










<?php 
     $bg = $this->uri->segment(2);

     switch ($this->uri->segment(2)) {
       case 'mind':
         $bg = "bg-mind";
         break;
       case 'body':
         $bg = "bg-body";
         break;
       case 'soul':
         $bg = "bg-soul";
         break;
       
       default:
         $bg = "";
         break;
     }
?>
<?php
	foreach ($sublinks as $row) {
?>
<div class="modal fade popup" id="<?php echo $row->image; ?>" tabindex="-1" role="dialog" aria-labelledby="ModalContactUsTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content <?php echo $bg; ?>">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalContactUsTitle"><?php echo $row->title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">       
    	<p>
    		<?php echo $row->class_desc; ?>
    	</p>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
<?php } ?>