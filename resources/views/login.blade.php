@include('layouts.master')
    <div class="login">
        <div class="jumbotron" id="top-bg">
            <div class="container">
                <h1 class="display-4 text-center text-white">Sign In</h1>
            </div>
        </div>
    
        <div class="container">
          <form action="" method="POST" id="login">
            <div class="row justify-content-center">
              <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0">
                <div class="form-col">
                  <div class="mt-5">
                    <label for="validationDefault03">Email</label>
                    <input type="text" class="form-control input" id="email" required>
                  </div>
    
                  <div class="mt-5">
                    <label for="validationDefault03">Password</label>
                    <input type="password" class="form-control input" id="password" required>
                  </div>
                </div>
    
                <div class="form-group mt-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                      Agree to terms and conditions
                    </label>
                  </div>
                </div>
    
                <div class="mt-5">
                  <p>Dont Have an Account? <a class="btn btn-sm text-white" id="signin-btn" href="register" role="button">Register</a></p>
                </div>
                
                <button class="btn text-white" id="signin-btn" type="submit">Sign In</button>
              </div>
            </div>
          </form>
        </div>    
    </div>

    @include('layouts.footer')
</body>
<script>
        $(document).ready(function(){
            $("#login").submit(function(e) {
                //prevent Default biar gak submit form dihandle dari javascript, bukan dari html
                e.preventDefault();

                //Ambil value email dari input
                let email = $("#email").val();
                let password = $("#password").val();

                //Handle form-data input
                var formData = new FormData();
                formData.append("email",email);
                formData.append("password",password);

                var url = "{{route('login.api')}}";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: (res) => {
                        // handle kalo sukses ngapain, contoh console.log(res);
                        localStorage.setItem("bearer-token", res.token);
                        localStorage.setItem("company", res.company);
                        if(res.roles == "Admin"){
                          window.location = "{{route('route.admin.home')}}";
                        }
                        if(res.roles == "Owner"){
                          window.location = "{{route('route.owner.home')}}";
                        }
                        if(res.roles == "Cashier"){
                          window.location = "{{route('route.cashier.home')}}";
                        }
                        if(res.roles == "Member"){
                          window.location = "{{route('route.member.home')}}";
                        }
                    },
                    error: (err) => {
                        // handle kalo error ngapain, contoh console.log(err);
                        console.log(err)
                    }
                });
            });
        });
    </script>
</html>
