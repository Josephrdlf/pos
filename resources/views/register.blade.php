@include('layouts.master')
    <div class="register">
        <div class="jumbotron top-signin-bg" id="top-bg">
            <div class="container">
                <h1 class="display-4 text-center text-white">Register</h1>
            </div>
        </div>
    
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0">
                    <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                        <form id="msform" class="needs-validation" novalidate>
                            <!-- Progress Bar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><b>Account</b></li>
                                <li id="personal"><b>Personal</b></li>
                                <li id="personal"><b>Company</b></li>
                                <li id="confirm"><b>Finish</b></li>
                            </ul>
    
                            <!-- Fieldset -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mt-5">
                                            <h2 class="fs-title">Account Information</h2>
                                        </div>
                                        <div class="col-5 mt-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div> 
                                    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Input Your Email" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Input Your Username" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Input Your Password" required>
                                    </div> 
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" required>
                                    </div>
    
                                </div> <input type="button" name="next" class="next action-button mt-5" value="Next" />
                            </fieldset>
    
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mt-5">
                                            <h2 class="fs-title">Personal Information</h2>
                                        </div>
                                        <div class="col-5 mt-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">First Name</label>
                                        <input type="text" class="form-control" id="first_name" placeholder="Input Your First Name" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Input Your Last Name" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" placeholder="Input Your Phone" required>
                                    </div>
    
                                </div> 
                                
                                <input type="button" name="next" class="next action-button mt-5" value="Next"/> 
                                <input type="button" name="previous" class="previous action-button-previous mt-5" value="Previous" />
                            </fieldset>

                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7 mt-5">
                                            <h2 class="fs-title">Company Information</h2>
                                        </div>
                                        <div class="col-5 mt-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Company Name</label>
                                        <input type="text" class="form-control" id="company_name" placeholder="Input Your First Name" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Input Your Last Name" required>
                                    </div>
    
                                    <div class="mt-4">
                                        <label for="validationDefault03">Contact Number</label>
                                        <input type="text" class="form-control" id="contact_number" placeholder="Input Your Phone" required>
                                    </div>
    
                                </div> 
                                
                                <input type="button" name="next" class="next action-button mt-5" value="Next"/> 
                                <input type="button" name="previous" class="previous action-button-previous mt-5" value="Previous" />
                            </fieldset>
    
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            
                                        </div>
                                        <div class="col-5 mt-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="assets/register/green-check.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                        </div>
                                    </div>
                                </div>
                                <button class="next action-button mt-5" id="register-btn" type="submit">Register</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        $(document).ready(function(){

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
            'display': 'none',
            'position': 'relative'
        });

        next_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(++current);
        });

        $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
            'display': 'none',
            'position': 'relative'
        });
        previous_fs.css({'opacity': opacity});
        },
        duration: 500
        });
        setProgressBar(--current);
        });

        function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
            .css("width",percent+"%")
        };

        $(".submit").click(function(){
            return false;
        });
        
        $("#msform").submit(function(e) {
            e.preventDefault();

            let email = $("#email").val();
            let username = $("#username").val();
            let password = $("#password").val();
            let password_confirmation = $("#password_confirmation").val();
            let first_name = $("#first_name").val();
            let last_name = $("#last_name").val();
            let phone_number = $("#phone_number").val();
            let company_name = $("#company_name").val();
            let address = $("#address").val();
            let contact_number = $("#contact_number").val();

            var formData = new FormData();
            formData.append("email",email);
            formData.append("name",username);
            formData.append("password",password);
            formData.append("password_confirmation",password_confirmation);
            formData.append("first_name", first_name);
            formData.append("last_name", last_name);
            formData.append("phone_number", phone_number);
            formData.append("company_name", company_name);
            formData.append("address", address);
            formData.append("contact_number", contact_number);

            var url = "{{route('register.api')}}";
            $.ajax({
                type: "POST",
                url: url,
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: (res) => {
                    alert("Successfully registered!");
                    window.location = "{{route('route.login')}}";
                },
                error: (err) => {
                    console.log(err)
                }
            });
        });

        });
    </script>
</body>
</html>