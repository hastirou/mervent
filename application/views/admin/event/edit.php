<section class="content">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Event</h1>
				</div>

			</div>
		</div><!-- /.container-fluid -->
	</section>

	<div class="container-fluid">
		<!-- general form elements -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Edit Event</h3>
			</div>
			<!-- form start -->
			<form action="<?= base_url('admin/event/update/'.$event->id) ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="text-danger">
						<?php echo validation_errors(); ?>
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" id="title" value="<?= $event->title ?>" placeholder="Enter Title">
					</div>

					<div class="form-group">
						<label for="date">Date</label>
						<input type="date" class="form-control" name="date" id="date" value="<?= $event->date ?>" placeholder="Enter Date">
					</div>

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="location" value="<?= $event->location ?>" placeholder="Enter Location">
					</div>

					<div class="form-group">
						<label>Select Category</label>
						<select class="form-control" name="category">
							<option value="wedding" <?php if ($event->category == 'wedding') echo 'selected'?>>Wedding</option>
							<option value="birthday" <?php if ($event->category == 'birthday') echo 'selected'?>>Birthday</option>
							<option value="concert" <?php if ($event->category == 'concert') echo 'selected'?>>Concert</option>
							<option value="festival" <?php if ($event->category == 'festival') echo 'selected'?>>Festival</option>
						</select>
					</div>

					<div class="form-group">
						<label for="coverimage">Cover Image</label>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="photo" id="coverimage">
								<label class="custom-file-label" for="coverimage">Choose file</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="description" name="description"><?= $event->description ?></textarea>
					</div>
				</div>
				<!-- /.card-body -->

				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /.card -->
