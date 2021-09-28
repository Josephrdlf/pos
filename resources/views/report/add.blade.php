{{-- Add Report --}}
              <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Report</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                            <form action="/employee" method="get">
                                <div class="form-col">
                                  <div class="mt-5">
                                    <label for="inputState">Nama Produk</label>
                                    <select id="inputState" class="form-control">
                                      <option selected>Pilih</option>
                                      <option>Tanaman Bunga Matahari</option>
                                      <option>Tanaman Kaktus</option>
                                      <option>Tanaman Lidah Buaya</option>
                                      <option>Tanaman Monstera</option>
                                      <option>Tanaman Suplir</option>
                                    </select>
                                  </div>
                  
                                  <div class="mt-5">
                                    <label for="validationDefault03">Sales</label>
                                    <input type="email" class="form-control">
                                  </div>
                    
                                  <div class="mt-5">
                                      <label for="validationDefault03">Stock</label>
                                      <input type="text" class="form-control">
                                  </div>
                                </div>
                              </form>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
                          <button class="btn btn-md mt-5 text-white add-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>