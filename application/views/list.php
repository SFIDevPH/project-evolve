
<div class="container-fluid">
	<div class="wrap">
		<div class="d-flex flex-row justify-content-center align-items-center h-100">						
			<div class="box-list animatedParent">
				<div class="d-flex flex-row justify-content-center align-items-center h-100">
					<div class="card animated fadeInDownShort delay-250">
						<div class="card-header">
							<h4>List of Candidate</h4>
						</div>
						<div class="card-body">
							<table cellspacing="0" cellspadding="0" width="100%" border="0">
								<thead>										
									<tr>
										<th>#</th>
										<th>datetime</th>
										<th>firstname</th>
										<th>lastname</th>
										<th>mi</th>
										<th>address</th>
										<th>birthday</th>
										<th>gender</th>
										<th>email</th>
										<th>contact</th>
										<th>education</th>
										<th>course</th>
										<th>status</th>
										<th>position</th>
										<th colspan="3">action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($candidate as $row) { ?>										
									<tr>
										<td><?= $row->id; ?></td>
										<td><?= $row->datetime; ?></td>
										<td><?= $row->firstname; ?></td>
										<td><?= $row->lastname; ?></td>
										<td><?= $row->mi; ?></td>
										<td><?= $row->address; ?></td>
										<td><?= $row->birthday; ?></td>
										<td><?= $row->gender; ?></td>
										<td><?= $row->email; ?></td>
										<td><?= $row->contact; ?></td>
										<td><?= $row->education; ?></td>
										<td><?= $row->course; ?></td>
										<td><?= $row->employment_status; ?></td>
										<td><?= $row->position; ?></td>
										<td><a href="#" title="code"><i class="fas fa-code"></i></a></td>
										<td><a href="#" title="edit" data-toggle="modal" data-target="#myModal-<?php echo $row->id; ?>"><i class="fas fa-user-edit"></i></a></td>
										<td><a href="delete/<?php echo $row->id; ?>" title="remove"><i class="fas fa-trash-alt"></i></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="box-list">
<?php
	foreach ($candidate as $row) { ?>
	<div class="modal" id="myModal-<?php echo $row->id; ?>">
	  <div class="modal-dialog modal-md modal-dialog-centered">
	    <div class="modal-content">

			<div class="modal-header">
			<h4 class="modal-title">Candidate Information</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<?php echo form_open('candidate/update'); ?>
			<div class="modal-body">
				<div class="row">
					<div class="col-5">
						<div class="form-group">
							<label for="">FirstName</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Firstname" value="<?= $row->firstname; ?>">
						</div>
					</div>
					<div class="col-5">
						<div class="form-group">
							<label for="">LastName</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Lastname" value="<?= $row->lastname; ?>">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="">M.I.</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="M.I." value="<?= $row->mi; ?>">
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							<label for="">Address</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Address" value="<?= $row->address; ?>">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Birthday</label>
						    <input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Birthday" value="<?= $row->birthday; ?>">
							</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Gender</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Gender" value="<?= $row->gender; ?>">
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							<label for="">Email</label>
							<input type="email" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Email" value="<?= $row->email; ?>">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Contact</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Contact" value="<?= $row->contact; ?>">
						</div>
					</div>
					<div class="col-6"></div>

					<div class="col-12">
						<div class="form-group">
							<label for="">Education</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Education" value="<?= $row->education; ?>">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Course</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Course" value="<?= $row->course; ?>">
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label for="">Status</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Employment Status" value="<?= $row->employment_status; ?>">
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							<label for="">Position</label>
							<input type="text" class="form-control" id="lancehere" aria-describedby="andhere" placeholder="Position" value="<?= $row->position; ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Update</button>
			</div>
			<?php echo form_close(); ?>
	    </div>
	  </div>
	</div>
<?php } ?>
</div>