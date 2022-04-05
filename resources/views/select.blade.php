<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
<tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Delete</th>
    <th>Update</th>
</tr>
@foreach($data as $item)
<tr>
    <td> {{ $item->pro_id }} </td>
<td> {{ $item->pro_name }} </td>
<td> <a href='delete/{{$item->pro_id}}'> Delete</a> </td>
<td> <a href='update/{{$item->pro_id}}'> Update</a> </td>
</tr>
    @endforeach
    </table>

    @yield('latestproducts')


</body>
</html>