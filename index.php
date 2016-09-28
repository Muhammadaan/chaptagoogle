<html>
<title>cap</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<form action="aksi.php" method="POST" class="form-horizontal">
 <div class="container">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-6">
         <h3>FORM</h3>
      </div>
	</div>
	 <div class="form-group">
		 <label class="col-sm-2 control-label">Nama</label>
		 <div class="col-sm-6">
		  <input type="text" name="nama" class="form-control">
		 </div>
	 </div>
	 <div class="form-group">
		 <label class="col-sm-2 control-label">Komentar</label>
		 <div class="col-sm-6">
		   <textarea name="komentar" class="form-control"></textarea>
		 </div>
	 </div>
	 <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-6">
	      <!-- <div class="g-recaptcha" data-sitekey="6LcN2QcUAAAAAAmKjSDZKE7xZGIX-Bhip1ILauSV"></div> -->

	      <!-- <div class="g-recaptcha" data-sitekey="6LcN2QcUAAAAAAmKjSDZKE7xZGIX-Bhip1ILauSV"></div> -->
	      <div class="g-recaptcha" data-sitekey="6LcT2QcUAAAAANrPsh0-vpGrAqmlCBAyK7nZ4xfk"></div> 
		</div>
	 </div>
	 <div class="form-group">
       <div class="col-sm-offset-2 col-sm-6">
         <input type="submit" value="Simpan" class="btn btn-sm btn-primary">
       </div>
     </div>
</div>
</form>
</body>
</html>