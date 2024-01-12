<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Data</title>
</head>
<body>
    <h1>Array Data</h1>

    <table>
        @foreach($data as $row)
            <tr>
                @foreach($row as $item)
                    <td>{{ $item }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>