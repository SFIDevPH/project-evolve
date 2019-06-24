
<div class="container-fluid">
	<div class="wrap">
		<?php
			if (isset($msg)) {
		?>
			<div class="box-success animatedParent">
				<div class="d-flex flex-row justify-content-center align-items-center">
					<div class="alert alert-success alert-dismissible fade show animated bounceIn delay-250" role="alert">
						<?php
					  		echo $msg;
						?>
					    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="d-flex flex-row justify-content-center align-items-center h-100">						
			<div class="box-login animatedParent">
				<div class="d-flex flex-row justify-content-center align-items-center h-100">
					<div class="card animated fadeInLeftShort delay-250">
						<div class="card-header">
							<h4>Class Schedule Information</h4>
						</div>
						<div class="card-body">
							<?php echo form_open('schedule/add'); ?>
								<div class="row">
									<div class="col-md-6">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
								            </div>
								            <input type="date" class="form-control" name="today" placeholder="" required>
								        </div>
								    </div>
								    <div class="col-md-6">
								        
								    </div>						    
							    </div>
							    <div class="row">
									<div class="col-md-6">
										<div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="fas fa-search-location"></i></span>
								            </div>
								            <select name="location" class="form-control form-control" required>
											  	<option value="">Class Location</option>
												<?php
													foreach ($location as $row) { ?>
														<option value="<?php echo $row->id; ?>"><?php echo $row->location; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>
								   	<div class="col-md-6">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="far fa-clock"></i></span>
								            </div>
								            <select name="timein" class="form-control form-control" required>
											  	<option value="">Time-In</option>
												<?php
													foreach ($time as $row) { ?>
														<option value="<?php echo $row->time; ?>"><?php echo $row->time; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>							    
							    </div>
							    <div class="row">
									<div class="col-md-6">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="fas fa-exclamation"></i></span>
								            </div>
								            <select name="type" class="form-control form-control">
											  	<option value="">Class Type</option>
												<?php
													foreach ($type as $row) { ?>
														<option value="<?php echo $row->id; ?>"><?php echo $row->type; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>
								   	<div class="col-md-6">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="far fa-clock"></i></span>
								            </div>
								            <select name="timeout" class="form-control form-control" required>
											  	<option value="">Time-Out</option>
												<?php
													foreach ($time as $row) { ?>
														<option value="<?php echo $row->time; ?>"><?php echo $row->time; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>							    
							    </div>
							    <div class="row">
									<div class="col-md-12">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="fas fa-book"></i></span>
								            </div>
								            <select name="class" class="form-control form-control" required>
											  	<option value="">Class Title</option>
												<?php
													foreach ($class as $row) { ?>
														<option value="<?php echo $row->id; ?>"><?php echo $row->class_title.' '.$row->class_subtitle; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>
								    <div class="col-md-12">
								        <div class="input-group form-group">
								            <div class="input-group-prepend">
								                <span class="input-group-text"><i class="fas fa-chalkboard-teacher"></i></span>
								            </div>
								            <select name="instructor" class="form-control form-control" required>
											  	<option value="">Class Instructor</option>
												<?php
													foreach ($instructor as $row) { ?>
														<option value="<?php echo $row->id; ?>"><?php echo $row->ins_name.'-'.$row->ins_title; ?></option>
												<?php } ?>
											</select>
								        </div>
								    </div>
							    </div>

								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-sm float-right btn-warning">
								</div>
							<?php echo form_close(); ?>
						</div>
					</div>

					<div class="card card-nobg">
						<div class="card-body">
							<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" class="img-fluid animated flipInX delay-250">
							<p>Talent Source is a platform dedicated specifically for companies and professionals. We provide employers an opportunity to test candidates before they recruit. We also provide jobseekers the opportunity to showcase their skills to top employers and find a job that best fits their needs. Talent Source also provides a training platform for jobseekers who score low in the skill set. <br><br> We are TEAM EVOLVE.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>