<!DOCTYPE html>
<html>
<head>
	<title></title>
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{url('/add/product')}}" method="post" enctype="multipart/form-data" class="bg-dark mx-auto w-25 p-4 text-light">
	@csrf
	<p> {{$errors->first('name')}} </p>
	<input class="form-control" name="name" placeholder="name">
	<p> {{$errors->first('count')}} </p>
	<input class="form-control" name="count" placeholder="count">
	<p> {{$errors->first('price')}} </p>
	<input class="form-control" name="price" placeholder="price">
	<p> {{$errors->first('discription')}} </p>
	<input class="form-control" name="discription" placeholder="discription">
	<p> {{$errors->first('cat')}} </p>
	<select name="category">
		@for ($i = 0; $i<$cat->count(); $i++)
		<option value="{{$cat[$i]['id']}}">
			{{$cat[$i]["name"]}}
		</option>
		@endfor
	</select>
	<input class="form-control" name="photo[]" multiple type="file" accept="image/*">
	<button class="btn-info">Add</button>
</form>
</body>
</html>