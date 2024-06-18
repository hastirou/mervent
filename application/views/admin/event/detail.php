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
				<h3 class="card-title">Detail Event</h3>
			</div>
			<!-- form start -->
			<form action="<?= base_url('admin/event/save') ?>" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="text-danger">
						<?php echo validation_errors(); ?>
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" name="title" id="title" value="<?= $event->title ?>"readonly>
					</div>

					<div class="form-group">
						<label for="date">Date</label>
						<input type="date" class="form-control" name="date" id="date" value="<?= $event->date ?>"readonly>
					</div>

					<div class="form-group">
						<label for="location">Location</label>
						<input type="text" class="form-control" name="location" id="location" value="<?= $event->location ?>"readonly>
					</div>

					<div class="form-group">
						<label>Category</label>
						<input type="text" class="form-control" name="category" id="category" value="<?= ucwords($event->category) ?>"readonly>
					</div>

					<div class="form-group">
						<label for="coverimage">Cover Image</label>
						<img src="<?= base_url('assets/event/'. $event->photo)?>" style="width: 100%">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="descripti" name="description" disabled><?= $event->description ?></textarea>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- /.card -->

<script>
	ClassicEditor
		.create( document.querySelector( '#descripti' ), {
		} )
		.then( editor => {
			const toolbarElement = editor.ui.view.toolbar.element;
			editor.enableReadOnlyMode( 'descripti' );
			editor.on( 'change:isReadOnly', ( evt, propertyName, isReadOnly ) => {
				if ( isReadOnly ) {
					toolbarElement.style.display = 'none';
				} else {
					toolbarElement.style.display = 'flex';
				}
			} );
		} )
		.catch( error => {
			console.log( error );
		} );

</script>
