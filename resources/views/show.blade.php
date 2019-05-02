<html>
<head>
    <title>
        Users
    </title>

</head>
<body style="align-items: center;
            display: flex;
            justify-content: center;">

<table border="5" style="border-color: #761b18">
    <tr style="color: #4c110f">
        <td>number</td>
        <td>name</td>
        <td>last name </td>
        <td>age </td>
    </tr>
    @foreach($x as $key => $user)
        <tr>
            <td>
                {{$key + 1}}
            </td>
            <td>
                {{$user['fName']}}
            </td>
            <td>
                {{$user['lName']}}
            </td>
            <td>
                {{$user['age']}}

            </td>
        </tr>
@endforeach
</table>





</body>
</html>
