<!DOCTYPE html>
<html>
<head>
	<title>Barcode Generator Zend Library</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
    <style type="text/css">
    .vertical-center {
        min-height: 100%;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    </style>
</head>
<body>
    <center>
        <div class="col-md-5 vertical-center">
            <div class="container">
                <!-- content  -->
                    <h3>Barcode Generator Using Zend Library</h3>
                    <p align="justify">Zend\Barcode provides a generic way to generate barcodes. The Zend\Barcode component is divided into two subcomponents: barcode objects and renderers. Objects allow you to create barcodes independently of the renderer. Renderer allow you to draw barcodes based on the support required. <a href="https://github.com/zendframework/zend-barcode">Source</a></p>
                    <form action="<?php echo site_url('Main/generate') ?>" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="host">Enter Code To Be Generated</label>
                            <input class="form-control" type="text" name="code" placeholder="">
                        </div>
                        <button class="btn btn-primary">Generate</button>
                    </form>
            </div>
        </div>
    </center>
</body>
</html>