<html>
<head>
    <title>
        Add
    </title>

</head>
<body>
<span>

<h2>Add a new blog</h2>

<form method="POST" action="{{url('blog/add')}}">
    Title:
    <input type="text" name="title"><br><br><br>
    body:
    <textarea name="body"></textarea><br><br><br>
    <input type="submit">
    @csrf
</form>

</span>


</body>
</html>
