@include('layouts.master')
<div class="page">
        <div class="container">
            <div class="d-flex justify-content-between">
                <h2 class="mt-5">Cart</h2>
                <button type="button" class="btn text-white mt-5 btn-emp" data-toggle="modal" data-target="#productModal">Product</button>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    @include('cart.cart')
                </div>

                <div class="col-md-6">
                    @include('cart.ref')

                    @include('cart.customer')

                    @include('cart.total')
                </div>

                    <button type="button" class="btn btn-lg text-white mt-5 mb-5 byr-btn">Bayar</button>
                </div>
            </div>
        </div>
    </div>

    @include('cart.product')

    @include('layouts.footer')
    <script>
        $(document).ready(function() {
            readproduct();
            var tableref = $('#ref tbody');
            tableref.append('<tr><td>'+ref+'</td></tr>');
        });

        const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        function generateString(length) {
            let result = ' ';
            const charactersLength = characters.length;
            for ( let i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }

            return result;
        }

        var ref = generateString(80);

        function read(){
            var token = localStorage.getItem("bearer-token");
            var tbody = $('#cart tbody');
            var o = 1;
            var formData = new FormData();
            tbody.empty();
            $.ajax({
                type: "GET",
                url: "{{route('show.cart')}}",
                data: "ref=" + ref,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization",
                    "Bearer " + token)
                },
                success: (res) => {
                    $.each(res.data, function(i, v){
                        tbody.append('<tr class="table"><th scope="row">'+o+'</th><td>'+v.name+'</td><td>Rp '+v.price+'</td><td><i class="fas fa-minus"></i> '+v.qty+' <i class="fas fa-plus"></td><td>Rp '+v.total+'</td><td><button class="btn" onClick="delete('+ v.id +')"><i class="fas fa-trash fa-lg mt-2"></button></td></tr>');
                    o++;
                    });
                    $('#cart').DataTable();
                },
                error: (err) => {
                    console.log(err)
                }
            });
        }

        function readproduct(){
            var token = localStorage.getItem("bearer-token");
            var tbody = $('#product tbody');
            var id = localStorage.getItem("company")
            var o = 1;
            tbody.empty();
            $.ajax({
                type: "GET",
                url: "{{route('company.product')}}",
                data: "id=" + id,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader("Authorization",
                    "Bearer " + token)
                },
                success: (res) => {
                    $.each(res.data, function(i, v){
                    tbody.append('<tr class="table"><th scope="row">'+o+'</th><td>'+v.name+'</td><td>'+v.description+'</td><td>'+v.category+'</td><td>'+v.stock+'</td><td>Rp '+v.price+'</td><td><button class="btn" onClick="addcart('+ v.id +')"><i class="fas fa-shopping-cart fa-lg mt-2"></button></td></tr>');
                    o++;
                    });
                    $('#product').DataTable();
                },
                error: (err) => {
                    console.log(err)
                }
            });
        }

        function addcart(id){
            var token = localStorage.getItem("bearer-token");
            var url = "{{route('add.cart')}}";

            var formData = new FormData();
            formData.append("id",id);
            formData.append("ref",ref);

            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function (xhr) {
                xhr.setRequestHeader("Authorization",
                    "Bearer " + token)
                },
                success: (res) => {
                    read();
                },
                error: (err) => {
                    console.log(err);
                }
            });
        }
    </script>