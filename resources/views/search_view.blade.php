<!
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/formValidation.css')}}" rel="stylesheet" type="text/css">    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search View</title>
</head>
<body>
{{--<form action="{{route('search')}}" method="post">
    {{ csrf_field() }}
    Name:
    <input type="text" name="Name" >
    <br>
    Phone:
    <input type="tel" name="Phone"  pattern="phone">
    <br>
    Email:
    <input type="email" name="Email">
    <br>
    Username:
    <input type="text" name="Username">
    <br>
    ID:
    <input type="text" name="ID">
    <br>
    <input type="submit">
</form>--}}
<div  class="flex-center position-ref full-height links" align ="center">
<form {{--action="{{route('search')}}" method="post"--}}>
    {{csrf_field()}}
    <p>
        <label for="name">name:</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="ph">phone:</label>
        <input type="text" id="ph" name="name" pattern="[0-9]{10}" placeholder="05XXXXXXXX" title="phone number 10 digit 05XXXXXXXX">
    </p>
    <p>
        <label for="name">username:</label>
        <input type="text" id="name" name="name">
    </p>

    <p>
        <label for="t2">e-mail:</label>
        <input type="email" id="t2" name="email">
    </p>

    <p>
        <label for="t5">ID:</label>
        <input type="tel" id="t5" name="id" pattern="[0-9]{10}" title="Enter National ID number 10 digits">
    </p>

    <p>
        <button>Submit</button>
    </p>
</form>
</div>
</body>
</html>