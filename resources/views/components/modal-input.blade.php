<!-- Modal -->
<div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Keranjang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-cart">
          <div class="container">
              <form method="POST" action="/product-admin" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Nama</label>
                      <input type="text" class="form-control" name="namaProduk" id="nama" placeholder="Masukkan nama produk">
                    </div>
                    <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Kategori</label>
                      <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukkan kategori">
                    </div>
                    <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Harga</label>
                      <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga">
                    </div>
                    <div class="input-group mb-4">
                      <label class="input-group-text" for="inputGroupFile01">Upload</label>
                      <input type="file" class="form-control" name="gambar">
                    </div>
                  <button type="submit" class="btn btn-success" name="upload">Submit</button>
                </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>