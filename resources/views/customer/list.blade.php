<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<table id="customers">
    <tr>
        <th>#</th>
        <th>CustomerName</th>
        <th>DOB</th>
        <th>Email</th>
    </tr>
    @if(count($customers) == 0)
        <tr>
            <td>No data</td>
        </tr>
    @else
    @foreach($customers as $key => $customer)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$customer['name']}}</td>
        <td>{{$customer['bod']}}</td>
        <td>{{$customer['email']}}</td>
    </tr>
        @endforeach
        @endif
</table>
</body>
</html>
