<table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
    
                        <tbody>
                            <tr>
                              <td>Rp 250.000</td>
                              <td class="d-flex justify-content-end">
                                <button type="button" class="btn btn-md text-white edit-btn" data-toggle="modal" data-target="#addModal">Add Voucher</button>

                                <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Add Voucher</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                    
                                            <div class="modal-body">
                                                <form action="/employee" method="get">
                                                    <div class="form-col">
                                                      <div class="mt-5">
                                                        <label for="inputState">Nama Voucher</label>
                                                        <select id="inputState" class="form-control">
                                                          <option selected>Pilih</option>
                                                          <option>Gratis Ongkir s.d. Rp 10.000</option>
                                                          <option>Gratis Ongkir s.d. Rp 20.000</option>
                                                          <option>Discount 20%</option>
                                                          <option>Discount 40%</option>
                                                          <option>Discount 50%</option>
                                                          <option>Discount 60%</option>
                                                        </select>
                                                      </div>
                                                    </div>
                                                  </form>
                                            </div>
                    
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
                                              <button class="btn btn-md mt-5 text-white add-btn" type="submit">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                    </table>