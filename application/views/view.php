<h1>Data Transaksi</h1><hr>
<a href="<?php echo base_url("index.php/export/export"); ?>">Export ke Excel</a><br><br>

<table border="1" cellpadding="8">
<tr>
  
  <th>Tanggal Transaksi</th>
  <th>No Transaksi</th>
  <th>Quantity</th>
  <th>Nama Barang</th>
  <th>Nama Supplier</th>
  <th>Status</th>
</tr>

<?php
if( ! empty($transaksi)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($transaksi as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->tanggal_transaksi."</td>";
    echo "<td>".$data->no_transaksi."</td>";
    echo "<td>".$data->qty."</td>";
    echo "<td>".$data->kode_mbarang."</td>";
    echo "<td>".$data->kode_supplier."</td>";
    echo "<td>".$data->status."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>