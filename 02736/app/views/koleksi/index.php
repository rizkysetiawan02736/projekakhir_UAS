<div class="container mt-3">

	 <div class="row">
	 	  <div class="col-lg-6">
		      <?php Flasher::flash(); ?>
		  </div>
	 </div>

	 <div class="row mb-3">
	 	<div class="col-lg-6">
		 <button type="button" class="btn btn-primary tombolTambahKoleksi" data-toggle="modal" data-target="#formModal">
 				 Tambah Koleksi Buku
			  </button>
		 </div>
	 </div>

	 <div class="row mb-3">
	 	<div class="col-lg-6">
		 	<form action="<?= BASEURL; ?>/koleksi/cari" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="cari buku.." name="keyword" id="keyword" autocomplete="off">
					<div class="input-group-append">
					<button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
				</div>
			 </form>
		 </div>
	 </div>

     <div class="row">
	      <div class="col-lg-6">
		       <h3>Koleksi Buku</h3> 
			   <ul class="list-group">
			    <?php foreach( $data['bku'] as $bku ) : ?> 
				 <li class="list-group-item">
				 <?= $bku['judul']; ?>
				 <a href="<?= BASEURL; ?>/koleksi/hapus/<?= $bku['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
				 <a href="<?= BASEURL; ?>/koleksi/ubah/<?= $bku['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $bku['id'];?>">ubah</a>
				 <a href="<?= BASEURL; ?>/koleksi/detail/<?= $bku['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
				 </li>
				<?php endforeach; ?>
			   </ul>
			         								   
		  </div>
	 </div>	  
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Koleksi Buku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
			<form action="<?= BASEURL; ?>/koleksi/tambah" method="post">
			<input type="hidden" name="id" id="id">
			<div class="form-group">
			<label for="judul">Judul</label>
			<input type="text" class="form-control" id="judul" name="judul" >
		</div>

		<div class="form-group">
			<label for="pengarang">Pengarang</label>
			<input type="text" class="form-control" id="pengarang" name="pengarang" >
		</div>

		<div class="form-group">
			<label for="penerbit">Penerbit</label>
			<select class="form-control" id="penerbit" name="penerbit">
			<option value="Gramedia">Gramedia</option>
			<option value="Erlangga">Erlangga</option>
			<option value="Mizan">Mizan</option>
			<option value="Gagas Media">Gagas Media</option>
			<option value="Elexmedia Komputindo">Elexmedia Komputindo</option>
			<option value="Sutar Media">Sutar Media</option>
			</select>
		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
		</form>
      </div>
    </div>
  </div>
</div>