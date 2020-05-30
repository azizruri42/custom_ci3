<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo isset( $title ) ? $title : "Codeigniter 3" ?></title>
	<?php

	if ( ! empty( $css ) ) {

		echo "<link rel=\"stylesheet\" href=\"" . base_url( "assets/core/css/$css" ) . "\"/>";

	}

	?>
</head>

<body class="bg-light">

	<div class="wrapper">
		<div id="content">
			<div class="col mt-4"> <?php $this->load->view( selectDevice( $page ) ); ?> </div>
		</div>
	</div>


</body>
<script src="<?php echo base_url('assets/js/jquery_3_3_1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.bundle.js'); ?>"></script>
<script>
	var base_url = "<?php echo site_url() ?>";
</script>
<?php

if ( !empty( $js ) ) {

	echo "<script src=\"" . base_url( "assets/core/js/$js" ) . "\"></script>";

}
?>
</html>