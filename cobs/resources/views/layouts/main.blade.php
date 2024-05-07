{{--main page with html and bootstrap--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{--    css with bootstrap--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{--    js with bootstrap--}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            {{--yield for user--}}
            @yield('user')
        </div>
    </div>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium aliquam animi architecto
        cumque deserunt distinctio dolorem doloremque ea earum error esse explicabo fugiat in incidunt inventore ipsa
        laboriosam, laborum magnam magni maiores modi nam nihil nobis, numquam porro praesentium quae quos rem
        repudiandae sapiente sed sequi soluta tempora ullam unde. Autem est, labore odit officiis reiciendis veniam?
        Accusamus adipisci, aspernatur aut blanditiis debitis, deserunt distinctio earum eius ipsum necessitatibus nemo
        provident quam quo quod quos rem repellat ullam vel velit veniam? Amet autem earum possimus quae, quam rem.
    </p>
</div>
</body>
</html>
