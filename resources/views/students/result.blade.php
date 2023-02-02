
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>RESULT</title>
</head>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="/css/style.css" rel="stylesheet">
<body>
<div class="container">
		<div class="title">REGISTRATION</div>
		
			<form action="{{url('/result')}}" method="post">
			@csrf
					
            @extend ('layout.student')

@section ('content')
<h1>hahahah </h1>
<table style="width:60%" border=1>
<tr>
    <td>ID</td>
    <th>Full_Name</th>
    <th>User_Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Phone_number</th>
    <th>Address</th>
    <th>Password</th>
    <th>Confirm_Password</th>
</tr>

@foreach ($vstudents as $user)

<tr>
    <td>{{$user->Full_Name}}</td>
    <td>{{$user->User_Name}}</td>
    <td>{{$user->Age}}</td>
    <td>{{$user->Email}}</td>
    <td>{{$user->Phone_number}}</td>
    <td>{{$user->Address}}</td>
    <td>{{$user->Password}}</td>
    <td>{{$user->Confirm_Password}}</td>
    <td>
        <a href="{{url('/update')}}" class="btn btn-primary"> Update</a>
</td>
<td>
<a href="{{url('/delete')}}" class="btn btn-primary"> Delete</a>
</td>
</tr>			
            </form>
        </div>
</body>
</html>


    