<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="antialiased">

<style>
    .box {
        width: 600px;
        margin: 0 auto;
    }

    .active_tab1 {
        background-color: #fff;
        color: #333;
        font-weight: 600;
    }

    .inactive_tab1 {
        background-color: #f5f5f5;
        color: #333;
        cursor: not-allowed;
    }

    .has-error {
        border-color: #cc0000;
        background-color: #ffff99;
    }
</style>
<div class="container box">

    <h2 align="center"> Multi Tab Form</h2><br/>

    <form method="POST" action="{{route('users.store')}}" id="register_form">
        @csrf
        @if($message = Session::get('success'))
            <div class="alert alert-info alert-dismissible">{{ $message }}  <button type="button" class="close" data-dismiss="alert">×</button></div>
        @endif
        @if ($errors->any())
            <div class="alert alert-dismissible fade show" style="color: black; background-color: #d4edda" role="alert">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Login Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal
                    Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact
                    Details</a>
            </li>
        </ul>
        <div class="tab-content" style="margin-top:16px;">
            <div class="tab-pane active" id="login_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Login Credentials</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter Email Address</label>
                            <input type="text" name="email" id="email" class="form-control"/>
                            <span id="error_email" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" id="password" class="form-control"/>
                            <span id="error_password" class="text-danger"></span>
                        </div>
                        <br/>
                        <div align="center">
                            <button type="button" name="btn_login_details" id="btn_login_details"
                                    class="btn btn-info btn-lg">Next
                            </button>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="personal_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Personal Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control"/>
                            <span id="error_first_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control"/>
                            <span id="error_last_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="male" checked> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                        </div>
                        <br/>
                        <div align="center">
                            <button type="button" name="previous_btn_personal_details"
                                    id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous
                            </button>
                            <button type="button" name="btn_personal_details" id="btn_personal_details"
                                    class="btn btn-info btn-lg">Next
                            </button>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact_details">
                <div class="panel panel-default">
                    <div class="panel-heading"> Contact Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                            <span id="error_address" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Mobile No.</label>
                            <input type="text" name="mobile" id="mobile_no" class="form-control"/>
                            <span id="error_mobile_no" class="text-danger"></span>
                        </div>
                        <br/>
                        <div align="center">
                            <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details"
                                    class="btn btn-default btn-lg">Previous
                            </button>
                            <button type="submit" name="btn_contact_details" id="btn_contact_details"
                                    class="btn btn-success btn-lg">Register
                            </button>
                        </div>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {

        $('#btn_login_details').click(function () {

            var error_email = '';
            var error_password = '';
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if ($.trim($('#email').val()).length == 0) {
                error_email = 'Email is required';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
                if (!filter.test($('#email').val())) {
                    error_email = 'Invalid Email';
                    $('#error_email').text(error_email);
                    $('#email').addClass('has-error');
                } else {
                    error_email = '';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('has-error');
                }
            }

            if ($.trim($('#password').val()).length == 0) {
                error_password = 'Password is required';
                $('#error_password').text(error_password);
                $('#password').addClass('has-error');
            } else {
                error_password = '';
                $('#error_password').text(error_password);
                $('#password').removeClass('has-error');
            }

            if (error_email != '' || error_password != '') {
                return false;
            } else {
                $('#list_login_details').removeClass('active active_tab1');
                $('#list_login_details').removeAttr('href data-toggle');
                $('#login_details').removeClass('active');
                $('#list_login_details').addClass('inactive_tab1');
                $('#list_personal_details').removeClass('inactive_tab1');
                $('#list_personal_details').addClass('active_tab1 active');
                $('#list_personal_details').attr('href', '#personal_details');
                $('#list_personal_details').attr('data-toggle', 'tab');
                $('#personal_details').addClass('active in');
            }
        });

        $('#previous_btn_personal_details').click(function () {
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
        });

        $('#btn_personal_details').click(function () {
            var error_first_name = '';
            var error_last_name = '';

            if ($.trim($('#first_name').val()).length == 0) {
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').addClass('has-error');
            } else {
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').removeClass('has-error');
            }

            if ($.trim($('#last_name').val()).length == 0) {
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').addClass('has-error');
            } else {
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').removeClass('has-error');
            }

            if (error_first_name != '' || error_last_name != '') {
                return false;
            } else {
                $('#list_personal_details').removeClass('active active_tab1');
                $('#list_personal_details').removeAttr('href data-toggle');
                $('#personal_details').removeClass('active');
                $('#list_personal_details').addClass('inactive_tab1');
                $('#list_contact_details').removeClass('inactive_tab1');
                $('#list_contact_details').addClass('active_tab1 active');
                $('#list_contact_details').attr('href', '#contact_details');
                $('#list_contact_details').attr('data-toggle', 'tab');
                $('#contact_details').addClass('active in');
            }
        });

        $('#previous_btn_contact_details').click(function () {
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        });

        $('#btn_contact_details').click(function () {
            var error_address = '';
            var error_mobile_no = '';
            var mobile_validation = /^\d{11}$/;
            if ($.trim($('#address').val()).length == 0) {
                error_address = 'Address is required';
                $('#error_address').text(error_address);
                $('#address').addClass('has-error');
            } else {
                error_address = '';
                $('#error_address').text(error_address);
                $('#address').removeClass('has-error');
            }

            if ($.trim($('#mobile_no').val()).length == 0) {
                error_mobile_no = 'Mobile Number is required';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            } else {
                if (!mobile_validation.test($('#mobile_no').val())) {
                    error_mobile_no = 'Invalid Mobile Number';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').addClass('has-error');
                } else {
                    error_mobile_no = '';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').removeClass('has-error');
                }
            }
            if (error_address != '' || error_mobile_no != '') {
                return false;
            } else {
                $('#btn_contact_details').attr("disabled", "disabled");
                $(document).css('cursor', 'prgress');
                $("#register_form").submit();
            }

        });

    });
</script>
</body>
</html>
