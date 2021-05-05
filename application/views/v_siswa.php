<!-- Home -->

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="<?=base_url()?>">Beranda</a></li>
                            <li>Siswa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<!-- Contact -->

<div class="contact">

    <!-- Contact Info -->
    <div class="contact_info_container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2>Daftar Siswa</h2><br>
			</div>
		</div>
        <div class="container">
            <div class="row">
				<div class="col-lg-12">
					<table id="tabelsiswa" class="table table-striped table-hover text-dark">
						<thead>
							<tr class="text-center">
								<th>NO</th>
								<th>Foto</th>
								<th>Nama</th>
								<th>NIS</th>
								<th>Kelas</th>
							</tr>
						</thead>
						<tbody>
						<?php $no=1; foreach($siswa as $key => $value){ ?>
							<tr>
								<td><?= $no++;?></td>
								<td><img src="<?=base_url('foto_siswa/'.$value->foto_siswa)?>" width="50px"></td>
								<td><?= $value->nama_siswa ?></td>
								<td><?= $value->nis ?></td>
								<td><?= $value->kelas ?></td>
							</tr>
						<?php } ?> 
						</tbody>
					</table>
				</div>

            </div>
        </div>
    </div>
</div>
