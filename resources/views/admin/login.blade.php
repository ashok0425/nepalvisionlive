@php
    $logo = DB::table('websites')->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $logo->title }}</title>
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Poppins:400,500');

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f6f6f6;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            height: 100vh;
            margin: auto;
            display: flex;
        }

        img {
            max-width: 100%;
            background: #fff;
        }

        .app {
            background-color: #fff;
            width: 330px;
            height: 570px;
            margin: 2em auto;
            border-radius: 5px;
            padding: 1em;
            position: relative;
            overflow: hidden;
            box-shadow: 0 6px 31px -2px rgba(0, 0, 0, .3);
        }

        a {
            text-decoration: none;
            color: #257aa6;
        }

        p {
            font-size: 13px;
            color: #333;
            line-height: 2;
        }

        .light {
            text-align: right;
            color: #fff;
        }

        .light a {
            color: #fff;
        }

        .bg {
            width: 400px;
            height: 550px;
            background: rgb(42, 135, 183);
            position: absolute;
            top: -5em;
            left: 0;
            right: 0;
            margin: auto;
            background-image: url("background.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            clip-path: ellipse(69% 46% at 48% 46%);
        }

        form {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            text-align: center;
            padding: 2em;
        }

        header {
            width: 220px;
            height: 220px;
            margin: 1em auto;
        }

        form input {
            width: 100%;
            padding: 13px 15px;
            margin: 0.7em auto;
            border-radius: 100px;
            border: none;
            background: rgb(255, 255, 255, 0.3);
            font-family: 'Poppins', sans-serif;
            outline: none;
            color: #fff;
        }

        input::placeholder {
            color: #fff;
            font-size: 13px;
        }

        .inputs {
            margin-top: -4em;
        }

        footer {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2em;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 13px 15px;
            border-radius: 100px;
            border: none;
            background: #f31924;
            font-family: 'Poppins', sans-serif;
            outline: none;
            color: #fff;
        }

        @media screen and (max-width: 640px) {
            .app {
                width: 100%;
                height: 100vh;
                border-radius: 0;
            }

            .bg {
                top: -7em;
                width: 450px;
                height: 95vh;
            }

            header {
                width: 90%;
                height: 250px;
            }

            .inputs {
                margin: 0;
            }

            input,
            button {
                padding: 18px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="app">

        <div class="bg"></div>

        <form action="{{ route('admin.login') }}" method="POST">
            <x-errormsg />
            @csrf
            <header>
                <img src="{{ getImageurl($logo->image) }}">
            </header>

            <div class="inputs">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="password" required>

                {{-- <p class="light"><a href="#">Forgot password?</a></p> --}}
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <footer>
                <button type="submit">Continue</button>
            </footer>
        </form>




    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    {{-- toastr  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('messege')) //toatser
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('messege') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
        @endif
    </script>
</body>

</html>
