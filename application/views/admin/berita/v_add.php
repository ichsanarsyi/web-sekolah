<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Tambah Data Berita
        </div>
        <div class="panel-body">
			<?php

				if (isset($error_upload)){
					echo '<div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$error_upload.'</div>';
				}
				
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>','</div>');
			
				echo form_open_multipart('berita/add');
			?>
			
			<div class="form-group">
				<label>Judul Berita</label>
				<input class="form-control" type="text" name="judul_berita" placeholder="Judul Berita" required>
			</div>			
			
			<div class="form-group">
				<label>Gambar Berita</label>
				<input class="form-control" type="file" name="gambar_berita" required>
			</div>
			
			<div class="form-group">
				<label>Isi Berita</label>
				<textarea name="isi_berita" id="editor" required></textarea>
			</div>
						
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-info">Reset</button>
			</div>
						
			<?php echo form_close(); ?>
		</div>
    </div>
</div> 