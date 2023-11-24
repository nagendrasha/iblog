<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
        @foreach ($assdt_sidebars as $item)
        <tr>
            <td>{{$item['sidebar_id']}}</td>
            <td>{{$item['tab_name']}}</td>
        </tr>
        @endforeach
    </table>
        
  
    <h2>Hello</h2>
    
</body>
</html>