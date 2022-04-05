
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('save',$row->pro_id) }}" method="post">
    @csrf

  <input type="hidden" name="pro_id" value="{{ $row->pro_id}}" >
    <input type="text" name="pro_name" value="{{ $row->pro_name}}" >
    <input type="submit" value="update"/>
  
</form>
    
</body>
</html>