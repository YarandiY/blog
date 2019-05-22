<html>
<head>
    <title>
        Blogs
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .item{
            color: dimgrey;
        }
        .item:hover{
            color: lightcoral;
            text-decoration: none;
        }
        .back{
            font-size: 25px;
            color: #6c757d;
            padding-left: 5%;
        }
        .back:hover{
            text-decoration: none;
            color: lightcoral;
        }
    </style>

</head>
<body style="padding-top: 5%" class="container">
<div class=" row ">
<div class="col-md-6">
<h1>Blogs</h1>

<br>
<ul class="list-group-horizontal-md" >
    @foreach($blogs as $blog)

        <li class="list-group-item-action"><a class="item" href="/blog/{{$blog['id']}}"> {{$blog['title']}} </a></li>

    @endforeach
</ul>
    </div>
    <div class="col-md-4">
        <br>
   <div ><a class="back container" href="/blogs/add">add new blog</a></div>
    </div>
</div>

</body>
</html>
