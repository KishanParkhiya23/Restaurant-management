<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Mail</title>
</head>

<body>
    <h1>{{$details['title']}}</h1>
    <p>{{$details['body']}}</p>
    <p>{{$details['changeText']}}</p>
    @if ($details['type'] != 1)
    <a href="http://127.0.0.1:8000/admin/change/password"><button class="btn btn-primary">Reset password</button></a>
    @else
    <a href="http://127.0.0.1:8000/user/changepassword"><button class="btn btn-primary">Reset password</button></a>
    @endif
    <br><br>
    <b>From, The Fork & Spoon team</b>
    <p>Thank You.</p>
</body>

</html>