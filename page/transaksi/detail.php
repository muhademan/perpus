<div class="row">

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <Center><b>Daftar Peminjaman</b></Center>
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th style="text-align:center;">Id Detail</th>
                                            <th style="text-align:center;">Id Buku</th>
                                            <th style="text-align:center;">Judul Buku</th>
                                            <th style="text-align:center;">Jumlah</th>
                                            <th style="text-align:center;">Tgl Kembali</th>
                                            <th style="text-align:center;">aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>
									<?php

									$tgl_pinjam = date("d-m-Y");


									$no = 1;
									$id_pinjam = $_GET['id_pinjam'];
									$sql = $koneksi->query("SELECT * from detail_peminjaman, peminjaman, buku where
									detail_peminjaman.id_buku = buku.id_buku and detail_peminjaman.id_pinjam =
									peminjaman.id_pinjam  and peminjaman.status_peminjaman='pinjam' and peminjaman.id_pinjam='$id_pinjam'");
									while($data= $sql->fetch_assoc()){



									?>
									<tr>
									<td style="text-align:center;"><?php echo $no++; ?></td>
									<td style="text-align:center;"><?php echo $data['id_detail'];?></td>
									<td style="text-align:center;"><?php echo $data['id_buku'];?></td>
									<td style="text-align:center;"><?php echo $data['judul_buku'];?></td>
									<td style="text-align:center;"><?php echo $data['jumlah'];?></td>
									<td style="text-align:center;"><?php echo $data['tgl_pinjam'];?></td>
									<td style="text-align:center;">
									<center><a href ="?page=transaksi
									&aksi=kembali
									&id_pinjam=<?php echo $data['id_pinjam']; ?>
									&judul_buku=<?php echo $data['judul_buku']; ?>"
									class= "btn btn-info">
									Kembali </a></center>

									</td>


									</tr>

									<?php
									}
									?>

									</tbody>
									</div>
							</div>
						</div>
				</div>
