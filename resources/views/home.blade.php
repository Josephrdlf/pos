@include('layouts.master') 
<body>
    <div class="page">
        <div class="container mt-3">
            <h2 class="display-5 mt-5">Dashboard</h2>

            <div class="row">
                <div class="col-sm-6 mt-5">
                    <div class="card" id="pmh">
                        <div class="card-body">
                            <img src="{{asset('assets/icons/rupiah.png')}}" width="30" height="30" class="d-inline">
                            <h5 class="card-title d-inline ml-2">Pemasukan Harian</h5>
                            <p class="card-text mt-2" id="text">Rp 150.000</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 mt-5">
                    <div class="card" id="plh">
                        <div class="card-body">
                            <img src="{{asset('assets/icons/customer.png')}}" width="30" height="30" class="d-inline">
                            <h5 class="card-title d-inline ml-2">Pelanggan Harian</h5>
                            <p class="card-text mt-2" id="text">30 Orang</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row my-3">
                <div class="col">
                    <h4>Pelanggan</h4>
                </div>
            </div>
            <div class="row my-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="pelanggan" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <a href="my-product"><button type="button" class="btn text-white mt-5 edit-btn container">My Product</button></a> --}}
        </div>
    </div>

    @include('layouts.footer')

    <script>
        var colors = ['#279c90'];
        var p = document.getElementById("pelanggan");

        var chartData = {
            labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"],
            datasets: [{
                data: [32, 30, 28, 35, 38, 45, 42],
                borderColor: colors[0],
                borderWidth: 4,
                pointBackgroundColor: colors[0]
            }]
        };

        if (p) {
            new Chart(p, {
                type: 'line',
                data: chartData
            });
        }
    </script>
</body>
</html>
