<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" >
<tr>
    <td>id</td>
    <td>lớp</td>
</tr>
@foreach ($a as $item)
<tr>
    <td><?=$item->id?></td>
    <td><?=$item->name?></td>
</tr>
    
@endforeach

    </table>
</body>
</html>