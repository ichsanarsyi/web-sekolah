<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Pengumuman
        </div>
        <div class="panel-body">
			<?php
			
				echo form_open_multipart('pengumuman/edit/'.$pengumuman->id_pengumuman);
			?>
			
			<div class="form-group">
				<label>Judul Pengumuman</label>
				<input class="form-control" value="<?= $pengumuman->judul_pengumuman ?>" type="text" name="judul_pengumuman" placeholder="Judul Pengumuman" required>
			</div>
			
			<div class="form-group">
				<label>Isi Pengumuman</label>
				<textarea class="form-control" name="isi_pengumuman" cols="30" rows="10" placeholder="Isi Pengumuman" required><?= $pengumuman->isi_pengumuman ?></textarea>
			</div>		
			
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-info">Reset</button>
			</div>
						
			<?php echo form_close(); ?>
		</div>
    </div>
</div> 