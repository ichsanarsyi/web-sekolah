<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data Siswa
        </div>
        <div class="panel-body">
			<?php
			
			echo validation_errors('<div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');

				if (isset($error_upload)){
					echo '<div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
				}
			
				echo form_open_multipart('siswa/edit/'.$siswa->id_siswa);
			?>
			
			<div class="form-group">
				<label>NIS</label>
				<input class="form-control" value="<?=$siswa->nis?>" type="text" name="nis" placeholder="NIS" required>
			</div>
			
			<div class="form-group">
				<label>Nama Siswa</label>
				<input class="form-control" value="<?=$siswa->nama_siswa?>" type="text" name="nama_siswa" placeholder="Nama Siswa" required>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label>Tempat Lahir</label>
					<input class="form-control" value="<?=$siswa->tempat_lahir?>" type="text" name="tempat_lahir" placeholder="Tempat Lahir" required>
				</div>	
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label>Tanggal Lahir</label>
					<input class="form-control" value="<?=$siswa->tgl_lahir?>" type="text" name="tgl_lahir" id="tanggal" placeholder="Tanggal Lahir" required>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label>Kelas</label>
					<select name="kelas" class="form-control">
						<option value="<?=$siswa->kelas?>"><?=$siswa->kelas?></option>
						<option value="I">I</option>
						<option value="II">II</option>
						<option value="III">III</option>
						<option value="IV">IV</option>
						<option value="V">V</option>
						<option value="VI">VI</option>
						<option value="VII">VII</option>
						<option value="VIII">VIII</option>
						<option value="XI">IX</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</div>
			</div>
						
			<div class="col-md-6">
				<div class="form-group">
					<label>Foto Siswa  </label>
					<img src="<?=base_url('foto_siswa/'.$siswa->foto_siswa)?>" width="100px">				
				</div>
			</div>

			
			<div class="form-group">
				<label>Ganti Foto Siswa</label>
				<input class="form-control" type="file" name="foto_siswa">
			</div>				
			
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-info">Reset</button>
			</div>
						
			<?php echo form_close(); ?>
		</div>
    </div>
</div> 