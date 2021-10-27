<html>

<head>
    <title>Document</title>
</head>

<body>
    <center>
        <h2>Tampilkan data</h2>
    </center>
    <ul>
        @foreach ($data as $data2)
            Id : {{ $data2['id'] }} <br>
            Title : {{ $data2['title'] }} <br>
            Content: {{ $data2['content'] }} <br>
            <hr>
        @endforeach
    </ul>
</body>

</html>
