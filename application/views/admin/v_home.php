<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
			Selamat datang <?= $this->session->userdata('nama_user') ?>
        </div>
        <div class="panel-body">
			<h4>Jumlah Guru: <?= $this->db->from("tbl_guru")->count_all_results(); ?></h4>	
			<h4>Jumlah Siswa: <?= $this->db->from("tbl_siswa")->count_all_results(); ?></h4>
        </div>
    </div>
</div> 
