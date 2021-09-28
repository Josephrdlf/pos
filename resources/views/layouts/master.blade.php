<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Point of Sales</title>

        {{--Bootstrap--}} 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
        
        <script src="https://kit.fontawesome.com/8aae24c3bf.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

        <!-- Styles -->
        <style>
            nav {
                font-family: 'Questrial', sans-serif;
            }

            .icon {
                color: #e6e482;
            }

            .bg-navbar {
                background-color: #3a833d;
            }

            #hover-drop:hover {
                background-color: #439c46;
            }

            .input {
                width: 500px;
            }

            footer {
                font-family: 'Questrial', sans-serif;
            }

            .employee {
                font-family: 'Poppins', sans-serif;
           }

            .add-btn, .edit-btn, .btn-emp {
                background-color: #1e6b35 !important;
            }

            .add-btn:hover, .edit-btn:hover, .btn-emp:hover {
                background-color: #4bb36a !important;
            }
            
            .del-btn {
                background-color: #d95d4a !important;
            }

            .del-btn:hover {
                background-color: #9e3a2b !important;
            }

            .login {
            font-family: 'Poppins', sans-serif;
            }

            #top-bg {
                background-color: #5bcf6e;
            }

            #signin-btn {
                background-color: #1e6b35 !important;
            }

            #signin-btn:hover {
                background-color: #4bb36a !important;
            }

            .register {
            font-family: 'Poppins', sans-serif;
            }

            #top-bg {
                background-color: #5bcf6e;
            }

            #heading {
                text-transform: uppercase;
                font-weight: normal
            }

            #msform {
                text-align: center;
                position: relative;
                font-family: 'Ubuntu', sans-serif;
                margin-top: 20px
            }

            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                margin: 0;
                padding-bottom: 20px;
                position: relative;
            }

            .form-card {
                text-align: left;
            }

            #msform fieldset:not(:first-of-type) {
                display: none
            }

            #msform .action-button {
                width: 100px;
                background: #1e6b35;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                padding: 10px 5px;
                margin: 10px 0px 10px 5px;
                float: right;
            }

            #msform .action-button:hover {
                background-color: #4bb36a;
            }

            #msform .action-button-previous {
                width: 100px;
                background: #616161;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 0px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px 10px 0px;
                float: right;
            }

            #msform .action-button-previous:hover,
            #msform .action-button-previous:focus {
                background-color: #000000
            }

            .fs-title {
                font-size: 25px;
                color: #334669;
                margin-bottom: 15px;
                font-weight: normal;
                text-align: left
            }
            
            .steps {
                font-size: 25px;
                color: gray;
                margin-bottom: 10px;
                font-weight: normal;
                text-align: right
            }

            #progressbar {
                margin-bottom: 30px;
                overflow: hidden;
                color: lightgrey
            }

            #progressbar .active {
                color: #1fb537;
            }

            #progressbar li {
                list-style-type: none;
                font-size: 25px;
                width: 25%;
                display: inline-block;
            }

            .fit-image {
                width: 100%;
            }

            .product {
            font-family: 'Poppins', sans-serif;
            }

            .add-btn {
                background-color: #1e6b35 !important;
            }

            .add-btn:hover {
                background-color: #4bb36a !important;
            }

            .edit-btn {
                background-color: #1e6b35 !important;
            }

            .edit-btn:hover {
                background-color: #4bb36a !important;
            }

            .del-btn {
                background-color: #d95d4a !important;
            }

            .del-btn:hover {
                background-color: #9e3a2b !important;
            }

            .page {
                font-family: 'Poppins', sans-serif;
            }

            #pmh {
                color: white;
                background-color: #a084c2;
            }

            #plh {
                color: white;
                background-color: #84c1c2;
            }

            #text {
                font-weight: bold;
                font-size: 20px;
            }

            #text-1 {
                font-size: 20px;
            }

            .more-btn, .add-btn {
                background-color: #1e6b35 !important;
            }

            .more-btn:hover, .add-btn:hover {
                background-color: #4bb36a !important;
            }

            .discount {
            font-family: 'Poppins', sans-serif;
            }
            
            #text {
                font-weight: bold;
                font-size: 20px;
            }

            .del-btn {
                background-color: #d95d4a !important;
            }

            .del-btn:hover {
                background-color: #9e3a2b !important;
            }

            .byr-btn {
                background-color: #1e6b35 !important;
            }

            .byr-btn:hover {
                background-color: #4bb36a !important;
            }

            .ship {
                background-color: #d1ebc3 !important;
            }

            #ref td{
                word-break: break-all;
            }
        </style>
    </head>
    <body>
         @if(Route::currentRouteName() != "route.login")
            @if(Route::currentRouteName() != "route.register")     
                <nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('assets/icons/sales.png')}}" width="30" height="30" class="d-inline-block align-top">
                            Point of Sales
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ml-auto">
                                {{--Dashboard--}} 
                                <a class="nav-link text-white active" href="home"> <i class="fas fa-tachometer-alt fa-lg mt-2 icon"></i></i></a>
                                @if(Route::currentRouteName() == "route.admin.home" || Route::currentRouteName() == "route.admin.user" ||Route::currentRouteName() == "route.owner.home" || Route::currentRouteName() == "route.owner.employee" || Route::currentRouteName() == "route.owner.product" || Route::currentRouteName() == "route.owner.cart") 
                                {{--Manage Employee--}} 
                                <a class="nav-link text-white" href="employee"> <i class="fas fa-users fa-lg mt-2 icon"></i></a>
                                @endif 
                                @if(Route::currentRouteName() == "route.owner.home" || Route::currentRouteName() == "route.owner.employee" || Route::currentRouteName() == "route.owner.product" || Route::currentRouteName() == "route.owner.cart" || Route::currentRouteName() == "route.member.home" || Route::currentRouteName() == "route.member.product") 
                                {{--Product Management--}} 
                                <a class="nav-link text-white" href="product"><i class="fas fa-store fa-lg mt-2 icon"></i></a>
                                @endif 
                                @if(Route::currentRouteName() == "route.owner.home" || Route::currentRouteName() == "route.owner.employee" || Route::currentRouteName() == "route.owner.product" || Route::currentRouteName() == "route.owner.cart" || Route::currentRouteName() == "route.member.home" || Route::currentRouteName() == "route.member.product") 
                                {{--Discount Management--}} 
                                <a class="nav-link text-white" href="discount"><i class="fas fa-percent fa-lg mt-2 icon"></i></a>
                                @endif 
                                @if(Route::currentRouteName() == "route.owner.home" || Route::currentRouteName() == "route.owner.employee" || Route::currentRouteName() == "route.owner.product" || Route::currentRouteName() == "route.owner.cart" || Route::currentRouteName() == "route.cashier.home" || Route::currentRouteName() == "route.cashier.cart") 
                                {{--Cashier--}} 
                                <a class="nav-link text-white" href="cart"><i class="fas fa-shopping-cart fa-lg mt-2 icon"></i></a>
                                @endif
                                @if(Route::currentRouteName() == "route.owner.home" || Route::currentRouteName() == "route.owner.employee" || Route::currentRouteName() == "route.owner.product" || Route::currentRouteName() == "route.owner.cart")
                                {{--Sales Incoming--}} 
                                <a class="nav-link text-white" href="income"> <i class="fas fa-chart-line fa-lg mt-2 icon"></i></a>

                                {{--Report Sales - Jadi satu sama Income--}}
                                <a class="nav-link text-white" href="report"> <i class="far fa-calendar-check fa-lg mt-2 icon"></i></a> 
                                
                                @endif
                                {{--Log Out--}} 
                                <button class="btn btn-white" onClick="logout()">
                                    <a class="nav-link text-white"> <i class="fas fa-sign-out-alt fa-lg icon"></i></a>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
            @endif
        @endif
        <script>
            function logout(){
                var conf = confirm("Are you sure you want to logout ?");
                if (conf = true){
                    $.ajax({
                        type: "POST",
                        url: "{{route('logout.api')}}",
                        success: function(data){
                            window.location = "{{route('route.login')}}"
                        }
                    })
                }
            }
        </script>

