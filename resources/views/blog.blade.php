<html>
<head>
    <title>
        Blogs
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        a{
            color: dimgrey;
        }
        a:hover{
            text-decoration: none;
            color: black;
        }

        .btn:hover{
            color: lightcoral;
        }
        .btn{
            color: black;
        }
    </style>


</head>
<body>
<br>
<div class="container" style="padding-top: 10%">
<div class="card">
    <div class="card-header">{{$blog->title}}</div>
    <div class="card-body">{{$blog->body}}</div>
</div>
    <br>
    <br>
    <div class="btn-group">
        <a class="btn" href="/blogs/edit/{{$blog->id}}" >edit</a>
        <a class="btn" href="/blogs" >blogs</a>
    </div>
</div>

</body>
</html>
