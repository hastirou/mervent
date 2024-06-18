    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Tabel Event Mervent</h3>
                            <a href="<?php echo site_url('admin/event/create'); ?>" class="btn btn-success ml-auto">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                &nbsp Add Event
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="basic-datatables">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Event Date</th>
                                        <th>Last Update</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
										$no = 1;
										foreach ($data as $event){
									?>
												<tr>
													<td><?= $no++ ?></td>
													<td><?= $event->title ?></td>
													<td><?= $event->date ?></td>
													<td><?= $event->lastupdated ?></td>
													<td>
														<a href="<?= base_url('admin/event/edit/'. $event->id)?>" class="btn btn-warning">Edit</a>
														&nbsp;
														<a href="<?= base_url('admin/event/detail/'. $event->id)?>" class="btn btn-info">Detail</a>
														&nbsp;
														<a href="<?= base_url('admin/event/remove/'. $event->id)?>" class="btn btn-danger">Delete</a>
													</td>
												</tr>
								<?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
