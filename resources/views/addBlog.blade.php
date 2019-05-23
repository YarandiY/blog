<html>
<head>
    <title>
        Add
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .btn:hover{
            color: lightgrey;
            background-color: grey;
        }
        .btn{
            background-color: lightgrey;
            color: black;
        }

    </style>
</head>
<body>
<br>
<br>
<br>
<div class="container ">
    <h1>Add a new blog</h1>
    <br>
    <br>

<form method="POST" action="{{url('blogs/add')}}">
    <div class="form-group ">
    <label for="title"> Title: </label><br>
    <input class="form-control" id="title" type="text" name="title">
    </div>

    <div class="form-group">
        <label for="body"> Body: </label><br>
        <textarea id="body" class="form-control" name="body"></textarea>
    </div>
    <div class="btn-group">
    <input class="btn" type="submit" value="save"><br> <a class="btn" href="/blogs">blogs</a>
    </div>
    @csrf
</form>

</div>
</body>
</html>
