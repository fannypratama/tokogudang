<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Chart using codeigniter and morris.js</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/js/morris.js-0.5.1/morris.css'?>">
  </head>
  <body>
    <h2>Chart using Codeigniter and Morris.js</h2>
 
    <div id="graph"></div>
 
    <script src="<?= base_url('assets/'); ?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.js-0.5.1/morris.min.js'?>"></script>
    <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $data;?>,
          xkey: 'kode_mbarang',
          ykeys: ['stok'],
          labels: ['jumlah']
        });
    </script>
  </body>
</html>