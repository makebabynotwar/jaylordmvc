<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- Landing page of the framework -->
	<style>
		*{ margin:0; padding:0; }
		body{ background: rgb(14, 30, 37); font-family: sans-serif; color:white; }
		.title{ text-align:center; margin-top: 4rem; font-size:3rem; }
		.description{ display:flex; justify-content: center; align-items: center; height: 70vh; }
	</style>
  <h1 class="title"><?php echo $data['title']; ?></h1>
  <p class="description">This is the JayLordMVC PHP framework.</p>
<!-- end of landing page -->

<?php require APPROOT . '/views/inc/footer.php'; ?>
