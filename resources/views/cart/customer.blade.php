<table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                              <td>Kirana Abigail</td>
                              <td>kiranabi@pos.com</td>
                              <td class="d-flex justify-content-end">
                                <button type="button" class="btn btn-md text-white edit-btn" data-toggle="modal" data-target="#editModal">Edit</button>

                                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
    
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-col">
                                                        <div class="mt-5">
                                                            <label for="validationDefault03">Nama</label>
                                                            <input type="email" class="form-control" id="validationDefault03" required>
                                                        </div>
                                            
                                                        <div class="mt-5">
                                                            <label for="validationDefault03">Email</label>
                                                            <input type="text" class="form-control" id="validationDefault03" required>
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
                              </td>
                            </tr>
                        </tbody>
                    </table>