@include('layouts.master')
    <div class="page">
        <div class="container mt-3">
          <div class="d-flex justify-content-between">
            <h2 class="mt-5">Manage Product</h2>
            <button type="button" class="btn text-white mt-5 edit-btn" data-toggle="modal" data-target="#addModal">Add Product</button>
          </div>
          @include('product.table')
        </div>
    </div>

    @include('product.add')
    @include('product.edit')

    @include('layouts.footer')
    <script>
      $(document).ready(function() {
        read();
      });

      function read(){
        var token = localStorage.getItem("bearer-token");
        var tbody = $('table tbody');
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
              tbody.append('<tr class="table"><th scope="row">'+o+'</th><td>'+v.name+'</td><td>'+v.description+'</td><td>'+v.category+'</td><td>'+v.stock+'</td><td>Rp '+v.price+'</td><td><button class="btn text-white" onClick="show('+ v.id +')"><img src="{{asset("assets/icons/edit.png")}}" width="30" height="30" data-toggle="modal" data-target="#editModal"></button></td><td><button class="btn btn-white" onClick="destroy('+ v.id +')"><img src="{{asset("assets/icons/delete.png")}}" width="30" height="30" data-toggle="modal" data-target="#delModal"></button></td></tr>');
              o++;
            });
            $('#data').DataTable();
          },
          error: (err) => {
            console.log(err)
          }
        });
      }

      function destroy(id){
        var token = localStorage.getItem("bearer-token");
        confirm("Are you sure to delete this product ?");
        $.ajax({
          type: "POST",
          url: "{{route('delete.product')}}",
          data: "id=" + id,
          beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization",
            "Bearer " + token)
          },
          success: function(data){
            read();
          }
        })
      }

      function show(id){
        var token = localStorage.getItem("bearer-token");
        var modal = $('#editModal');
        var enama = $('#enama');
        var edesc = $('#edesc');
        var ecat = $('#ecat');
        var eprice = $('#eprice');
        var estock = $('#estock');
        var epid = $('#epid');
        modal.modal('show');
        $.ajax({
          type: "GET",
          url: "{{route('show.product')}}",
          data: "id=" + id,
          beforeSend: function (xhr) {
            xhr.setRequestHeader("Authorization",
              "Bearer " + token)
          },
          success: (res) => {
            enama.val(res.data.name);
            edesc.val(res.data.description);
            console.log(res.data.product_category_id);
            ecat.val(res.data.category_id);
            eprice.val(res.data.price);
            estock.val(res.data.stock);
            epid.val(id);
          },
          error: (err) => {
            console.log(err)
          }
        });
      }
      
      $("#editform").submit(function(e) {
        e.preventDefault();
        var form = $('#editform');
        var addclose = $('#close-add');
        var modal = $('#editModal');
        var token = localStorage.getItem("bearer-token");
        let enama = $('#enama').val();
        let edesc = $('#edesc').val();
        let ecat = $('#ecat').val();
        let eprice = $('#eprice').val();
        let estock = $('#estock').val();
        let epid = $('#epid').val();

        var formData = new FormData();
        formData.append("pid",epid);
        formData.append("name",enama);
        formData.append("description",edesc);
        formData.append("category",ecat);
        formData.append("price",eprice);
        formData.append("stock",estock);

        var url = "{{route('edit.product')}}";
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
            console.log(res);
            modal.modal('hide');
            $('.modal-backdrop').modal('hide');
            read();
          },
          error: (err) => {
            console.log(err);
          }
        });
      });

      $("#addform").submit(function(e) {
        e.preventDefault();
        var form = $('#addform');
        var addclose = $('#close-add');
        var modal = $('#addModal');
        var id = localStorage.getItem("company")
        var token = localStorage.getItem("bearer-token");
        let nama = $('#nama').val();
        let desc = $('#desc').val();
        let cat = $('#cat').val();
        let price = $('#price').val();
        let stock = $('#stock').val();

        var formData = new FormData();
        formData.append("company_id",id);
        formData.append("name",nama);
        formData.append("description",desc);
        formData.append("product_category_id",cat);
        formData.append("price",price);
        formData.append("stock",stock);

        var url = "{{route('create.product')}}";
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
            modal.modal('hide');
            $('.modal-backdrop').modal('hide');
            read();
          },
          error: (err) => {
            console.log(err);
          }
        });
      });

    </script>
</body>
</html>