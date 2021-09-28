{{-- Edit Produk --}}
                      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="editform">
                                <input type="hidden" id="epid" value="">
                                <div class="form-col">
                                  <label for="validationDefault03">Upload Image</label>
                                  <div class="input-group mt-2">
                                    <input type="text" class="form-control" placeholder="Upload File" id="file">
                                    <div class="input-group-append">
                                      <button type="button" class="browse btn add-btn text-white">Browse</button>
                                    </div>
                                  </div>

                                  <div class="mt-5">
                                      <label for="validationDefault03">Nama</label>
                                      <input type="text" class="form-control" id="enama" required>
                                  </div>
                  
                                  <div class="mt-5">
                                    <label for="validationDefault03">Description</label>
                                    <input type="text" class="form-control" id="edesc" required>
                                  </div>
                    
                                  <div class="mt-5">
                                      <label for="validationDefault03">Katagori Produk</label>
                                      <input type="text" class="form-control" id="ecat" required>
                                  </div>
        
                                  <div class="mt-5">
                                      <label for="validationDefault03">Harga</label>
                                      <input type="text" class="form-control" id="eprice" required>
                                  </div>
                  
                                  <div class="mt-5">
                                      <label for="validationDefault03">Stock</label>
                                      <input type="text" class="form-control" id="estock" required>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
                                <button class="btn btn-md mt-5 text-white add-btn" type="submit">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>