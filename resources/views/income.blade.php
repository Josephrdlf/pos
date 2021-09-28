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
        .pagination .page-item.active .page-link { 
            background-color: #3a833d; 
        }
    </style>

    @include('layouts.master')
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="d-flex justify-content-end">
                <h2 class="mt-5 mr-auto">History Transaksi</h2>
                <button type="button" class="btn text-white ml-5 mt-5 add-btn">Download Report</button>
                <button type="button" class="btn text-white ml-5 mt-5 add-btn" data-toggle="modal" data-target="#addModal">Add Report</button>

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
                                            <label for="validationDefault03">ID Transaksi</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="mt-5">
                                            <label for="validationDefault03">Nama Customer</label>
                                            <input type="text" class="form-control">
                                        </div>

                                        <div class="row">
                                            <div class="mt-5 ml-2">
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
                                                <label for="validationDefault03">Qty</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                        
                                        <div class="mt-5">
                                            <label for="validationDefault03">Bulan</label>
                                            <input type="email" class="form-control">
                                        </div>
                            
                                        <div class="mt-5">
                                            <label for="validationDefault03">Total</label>
                                            <input type="text" class="form-control">
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
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="display-6 mt-3">Total Pemasukan</h4>
                        <h2 class="display-5 mt-2">Rp 25.000.000</h2>
                    </div>

                    <hr class="mt-5">
                    <p id="text">Riwayat Transaksi</p>

                    <table class="table mt-3" id="data">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Transaksi</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Product</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Bulan</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
            
                        <tbody>
                            {{-- Tr1 --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Agustus 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr2 --}}
                            <tr>
                                <th scope="row">2</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Juli 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr3 --}}
                            <tr>
                                <th scope="row">3</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Juni 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr4 --}}
                            <tr>
                                <th scope="row">4</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Mei 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr5 --}}
                            <tr>
                                <th scope="row">5</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>April 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr6 --}}
                            <tr>
                                <th scope="row">6</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Maret 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr7 --}}
                            <tr>
                                <th scope="row">7</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Februari 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr8 --}}
                            <tr>
                                <th scope="row">8</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Januari 2021</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr9 --}}
                            <tr>
                                <th scope="row">9</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Desember 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr10 --}}
                            <tr>
                                <th scope="row">10</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>November 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr11 --}}
                            <tr>
                                <th scope="row">11</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Oktober 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr12 --}}
                            <tr>
                                <th scope="row">12</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>September 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr 13 --}}
                            <tr>
                                <th scope="row">13</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Agustus 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr14 --}}
                            <tr>
                                <th scope="row">14</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Juli 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr15 --}}
                            <tr>
                                <th scope="row">15</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Juni 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr16 --}}
                            <tr>
                                <th scope="row">16</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Mei 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr17 --}}
                            <tr>
                                <th scope="row">17</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>April 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr18 --}}
                            <tr>
                                <th scope="row">18</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Maret 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr19 --}}
                            <tr>
                                <th scope="row">19</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Februari 2020</td>
                                <td>Rp 250.000</td>
                            </tr>

                            {{-- Tr20 --}}
                            <tr>
                                <th scope="row">20</th>
                                <td>POS2715</td>
                                <td>Kirana Abigail</td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">An item</li>
                                        <li class="list-group-item">A second item</li>
                                        <li class="list-group-item">A third item</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">1</li>
                                        <li class="list-group-item">2</li>
                                        <li class="list-group-item">3</li>
                                    </ul>
                                </td>
                                <td>Januari 2020</td>
                                <td>Rp 250.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        } );
    </script>
</body>
</html>