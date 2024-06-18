<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mervent Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
	<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
	<style>
		.ck-editor__editable_inline {
			min-height: 400px;
			color: black;
		}
	</style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('/'); ?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
          <a href="<?php echo site_url('auth/logout'); ?>" class="nav-link">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <?php $this->load->view('admin/layouts/sidebar'); ?>
  <div class="content-wrapper">
  <?php if(isset($content)) {?>  
  <?php $this->load->view($content) ?>
  <?php }?>
  </div>
  <?php $this->load->view('admin/layouts/footer'); ?>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?= base_url('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
<script src="<?= base_url('assets/plugins/raphael/raphael.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/jquery-mapael/maps/usa_states.min.js') ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<script>
	$(function () {
		$("#basic-datatables").DataTable();
	});
</script>
<script>
	ClassicEditor
		.create( document.querySelector( '#description' ),{
			toolbar : [
				'undo', 'redo',
				'|', 'bold', 'italic', 'link', 'heading' ,
				'|', 'numberedList', 'bulletedList', 'blockQuote', 'outdent', 'indent'],
			language : 'en'
		} )
		.then( editor => {
			console.log( 'Editor was initialized', editor );
		} )
		.catch( error => {
			console.error( 'Error occurred', error );
		} );
</script>
</body>
</html>
