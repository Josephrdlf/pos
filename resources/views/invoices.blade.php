<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <title>Point of Sales</title>

    <style>
      .page {
        font-family: 'Poppins', sans-serif;
      }

      .ship {
        background-color: #d1ebc3 !important;
      }

      .btn-send {
        background-color: #1e6b35 !important;
      }

      .btn-send:hover {
        background-color: #4bb36a !important;
      }
    </style>
  </head>
  <body>
    <div class="page">
      <div class="container mt-5">
          <div class="card">
              <div class="card-body">
                  <h2>Invoices</h2>

                  <div class="card mt-5 ship">
                      <div class="card-body">
                          <div class="d-flex justify-content-between">
                              <h4>Bill To</h4>
                              <button type="button" class="btn text-white btn-send" data-toggle="modal" data-target="#editModal">Edit</button>

                              {{-- Edit --}}
                              <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                        <button type="button" id="close-edit" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <form id="editform">
                                          <div class="form-col">
                                            <input type="hidden" id="euid" value="">
                                            <div class="mt-1">
                                              <label for="validationDefault03">Nama</label>
                                              <input type="text" class="form-control" id="enama" required>
                                            </div>
                                            <div class="mt-5">
                                              <label for="validationDefault03">Email</label>
                                              <input type="email" class="form-control" id="eemail" required>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary mt-5" data-dismiss="modal">Close</button>
                                          <button class="btn btn-md mt-5 text-white btn-send" type="submit">Edit</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                              </div>
                          </div>

                          <p class="mt-4">Kirana Abigail</p>
                          <p>kiranabi@pos.com</p>
                      </div>
                  </div>

                  <table class="table table-borderless mt-5">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Product</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Price</th>
                          <th scope="col">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Tanaman Kaktus</td>
                              <td>1</td>
                              <td>Rp 40.000</td>
                              <td>Rp 40.000</td>
                          </tr>
                          <tr>
                              <th scope="row">2</th>
                              <td>Tanaman Monstera</td>
                              <td>2</td>
                              <td>Rp 40.000</td>
                              <td>Rp 80.000</td>
                          </tr>
                          <tr>
                              <th scope="row">3</th>
                              <td>Tanaman Lidah Buaya</td>
                              <td>1</td>
                              <td>Rp 35.000</td>
                              <td>Rp 35.000</td>
                          </tr>
                          <tr>
                              <th></th>
                              <td></td>
                              <td></td>
                              <td><b>Total</b></td>
                              <td>Rp 155.000</td>
                          </tr>
                      </tbody>
                  </table>

                  <button type="button" class="btn text-white mt-5 btn-send container">Send</button>
              </div>
            </div>

      </div>
  </div>

  @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
