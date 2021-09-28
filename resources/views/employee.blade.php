@include('layouts.master')
  <div class="page">
    <div class="container mt-3">
      <div class="d-flex justify-content-between">
        <h2 class="mt-5">Manage Employee</h2>
        <button type="button" class="btn text-white mt-5 btn-emp" data-toggle="modal" data-target="#addModal">Add Employee</button>
      </div>

      @include('employee.table')

    </div>
  </div>
  @include('employee.add')
  
  @include('employee.edit')
</body>
@include('layouts.footer')
<script>
    $(document).ready( function () {
        read();
    });

    function read(){
      var token = localStorage.getItem("bearer-token");
      var tbody = $('table tbody');
      var o = 1;
      tbody.empty();
      var id = localStorage.getItem("company");
      if(id != "null"){
        var url = "{{route('company.user')}}"
      } else {
        var url = "{{route('api.user')}}"
      }
      $.ajax({
        type: "GET",
        url: url,
        data: "id=" + id,
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization",
            "Bearer " + token)
        },
        success: (res) => {
          $.each(res.data, function(i, v){
            tbody.append('<tr class="table"><th scope="row">'+o+'</th><td>'+v.name+'</td><td>'+v.email+'</td><td>'+v.roles+'</td><td><button class="btn text-white" onClick="show('+ v.id +')"><img src="{{asset("assets/icons/edit.png")}}" width="30" height="30" data-toggle="modal" data-target="#editModal"></button></td><td><button class="btn btn-white" onClick="destroy('+ v.id +')"><img src="{{asset("assets/icons/delete.png")}}" width="30" height="30" data-toggle="modal" data-target="#delModal"></button></td></tr>');
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
      confirm("Are you sure to delete this employee ?");
      $.ajax({
        type: "POST",
        url: "{{route('delete.user')}}",
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
      var eemail = $('#eemail');
      var erole = $('#erole');
      var euid = $('#euid');
      modal.modal('show');
      $.ajax({
        type: "GET",
        url: "{{route('show.user')}}",
        data: "id=" + id,
        beforeSend: function (xhr) {
          xhr.setRequestHeader("Authorization",
            "Bearer " + token)
        },
        success: (res) => {
          enama.val(res.data.name);
          eemail.val(res.data.email);
          erole.val(res.data.role_id);
          euid.val(id);
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
      let uid = $("#euid").val();
      let email = $("#eemail").val();
      let username = $("#enama").val();
      let password = $("#epassword").val();
      let password_confirmation = $("#epassword_confirmation").val();
      let role_id = $("#erole").val();

      var formData = new FormData();
      formData.append("uid",uid);
      formData.append("email",email);
      formData.append("name",username);
      formData.append("password",password);
      formData.append("password_confirmation",password_confirmation);
      formData.append("role_id",role_id);

      var url = "{{route('edit.user')}}";
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
      var token = localStorage.getItem("bearer-token");
      var id = localStorage.getItem("company")
      let email = $("#email").val();
      let username = $("#username").val();
      let password = $("#password").val();
      let password_confirmation = $("#password_confirmation").val();
      let first_name = $("#first_name").val();
      let last_name = $("#last_name").val();
      let phone_number = $("#phone_number").val();

      var formData = new FormData();
      formData.append("email",email);
      formData.append("name",username);
      formData.append("password",password);
      formData.append("password_confirmation",password_confirmation);
      formData.append("first_name", first_name);
      formData.append("last_name", last_name);
      formData.append("phone_number", phone_number);
      formData.append("company_id",id);

      var url = "{{route('create.user')}}";
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
</html>
