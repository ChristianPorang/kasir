

<?php
// Assuming you have your database connection details
$hostname = "localhost";
$username = "root";
$password = "";
$database = "tokoacc";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

            function format_ribuan ($nilai){
                return number_format ($nilai, 0, ',', '.');
            }
                $query = mysqli_query($conn, "SELECT * FROM laporanku");
                $total = 0;
                $tot_bayar = 0;
                $no = 1;
                while ($r = $query->fetch_assoc()) {
                $total = $r['harga_barang'] * $r['quantity'];
                $tot_bayar += $total; }
                mysqli_close($conn);
                ?>
  

    <!-- table barang -->
    
                
            <?php
// Assuming you have your database connection details
$hostname = "localhost";
$username = "root";
$password = "";
$database = "tokoacc";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
 <div class="col-md-20 mb-2">
        <div class="card">
        <div class="card-header bg-purple">
                <div class="card-tittle text-white"><i class="fa fa-table"></i> <b>Data Barang</b></div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
            <table class="table" id="table" style="width: 80px; height: 70px;">
                        <thead class="thead-purple">
            
                            <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Tgl Input</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Harga</th>
                            <th>Sub-Total</th>
                            <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        $data_barang = mysqli_query($conn,"SELECT * FROM laporanku ");
                        while($d = mysqli_fetch_array($data_barang)){
                            ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['no_transaksi']; ?></td>
                            <td><?php echo $d['tgl_input']; ?></td>
                            <td><?php echo $d['nama_barang']; ?></td>
                            <td><?php echo $d['quantity']; ?></td>
                            <td>Rp. <?php echo $d['harga_barang']; ?>,-</td>
                            <td>Rp. <?php echo $d['subtotal']; ?>,-</td>
                           
						</tr>
                        </thead>
                        <?php }?>
					</tbody>
                    <tfoot>
                        <tr>
                        <th colspan="6" class="text-right"><b>TOTAL :</b></th>
                        <th><b>Rp. <?php echo format_ribuan($tot_bayar); ?>,-</b></th>
                        <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    
    <!-- end table barang -->

    </div><!-- end row col-md-9 -->
  </div>
  <?php 
	include 'config.php';
	if(!empty($_GET['id'])){
		$id= $_GET['id'];
		$hapus_data = mysqli_query($conn, "DELETE FROM laporanku WHERE id_cart ='$id'");
		echo '<script>window.location="laporan.php"</script>';
	}

?>

