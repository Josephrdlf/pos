<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Point of Sales</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet"> 

    <style>
        .discount {
            font-family: 'Poppins', sans-serif;
        }
        .stock {
            font-size: 15px;
        }

        .add-btn, .edit-btn {
            background-color: #1e6b35 !important;
        }

        .add-btn:hover, .edit-btn:hover {
            background-color: #4bb36a !important;
        }

        .del-btn {
            background-color: #d95d4a !important;
        }

        .del-btn:hover {
            background-color: #9e3a2b !important;
        }
    </style>

    @include('layouts.master')
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h2 class="mt-5">Manage Voucher</h2>
                <button class="btn btn-md btn-light d-inline-block mt-5" data-toggle="modal" data-target="#addModal">Add Voucher<img src="assets/icons/plus.png" class="ml-3" width="30" height="30"></button>
            </div>
            
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
                                      <option>Discount 20%</option>
                                      <option>Discount 40%</option>
                                      <option>Discount 50%</option>
                                    </select>
                                  </div>
                  
                                  <div class="mt-5">
                                    <label for="validationDefault03">Stock</label>
                                    <input type="email" class="form-control">
                                  </div>
                    
                                  <div class="mt-5">
                                      <label for="validationDefault03">Expiration Date</label>
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

            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" id="text">Gratis Ongkir s.d. Rp 20.000</p>
                            <p class="text-muted">Expiration Date: 1 October 2021</p>

                            <p class="stock">Stock : 8</p>

                            {{-- Edit Employee --}}
                            <button type="button" class="btn btn-md text-white edit-btn" data-toggle="modal" data-target="#editModal">Edit</button>

                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-col">
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Stock</label>
                                                        <input type="email" class="form-control" id="validationDefault03" required>
                                                    </div>
                                        
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Expiration Date</label>
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

                            {{-- Delete Produk --}}
                            <button type="button" class="btn btn-md text-white del-btn" data-toggle="modal" data-target="#delModal">Delete</button>

                            <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        <p>Are you sure want to delete?</p>
                                        </div>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn del-btn text-white">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" id="text">Discount 20%</p>
                            <p class="text-muted">Expiration Date: 30 September 2021</p>

                            <p class="stock">Stock : 6</p>

                            {{-- Edit Employee --}}
                            <button type="button" class="btn btn-md text-white edit-btn" data-toggle="modal" data-target="#editModal">Edit</button>

                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-col">
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Stock</label>
                                                        <input type="email" class="form-control" id="validationDefault03" required>
                                                    </div>
                                        
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Expiration Date</label>
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

                            {{-- Delete Produk --}}
                            <button type="button" class="btn btn-md text-white del-btn" data-toggle="modal" data-target="#delModal">Delete</button>

                            <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        <p>Are you sure want to delete?</p>
                                        </div>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn del-btn text-white">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" id="text">Discount 40%</p>
                            <p class="text-muted">Expiration Date: 1 October 2021</p>

                            <p class="stock">Stock : 5</p>

                            {{-- Edit Employee --}}
                            <button type="button" class="btn btn-md text-white edit-btn" data-toggle="modal" data-target="#editModal">Edit</button>

                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>

                                        <div class="modal-body">
                                            <form>
                                                <div class="form-col">
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Stock</label>
                                                        <input type="email" class="form-control" id="validationDefault03" required>
                                                    </div>
                                        
                                                    <div class="mt-5">
                                                        <label for="validationDefault03">Expiration Date</label>
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

                            {{-- Delete Produk --}}
                            <button type="button" class="btn btn-md text-white del-btn" data-toggle="modal" data-target="#delModal">Delete</button>

                            <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                        <p>Are you sure want to delete?</p>
                                        </div>

                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        <button type="button" class="btn del-btn text-white">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('layouts.footer')
</body>
</html>