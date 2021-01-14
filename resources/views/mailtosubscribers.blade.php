<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail to Subscribers</title>
</head>
<body>
    <form action="{{ route('send.subscribers') }}" method="POST" role="form">
        @csrf
        <button type="submit">Send mails</button>
    </form>
</body>
</html>