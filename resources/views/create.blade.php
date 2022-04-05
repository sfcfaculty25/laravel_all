<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('insert') }}" method="post">
@csrf
<!-- {{ csrf_token(); }} -->
<!-- <input type="text" name="fname"/>
<input type="text" name="lname"/> -->

<input type="text" name="pro_name"/>


<input type="submit" value="click"/>

</form>


</body>
</html>