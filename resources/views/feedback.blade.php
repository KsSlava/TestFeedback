<!DOCTYPE html>
<html>
<head>
    <title>Test Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col">

		<form action="/" method="post">

			<table style="width: 300px; height: 100vh; margin:0 auto;">
			<tbody>
			<tr>
			<td class="align-middle">

				<h2>Feedback Test</h2>

				<div class="mb-3">
					<label class="form-label">email* (a-zA-Z@.)</label><input class="form-control {{$errors->has('email') ? 'alert-danger' : ''}}" id="email" type="text" name="email" value="{{old('email')}}">	
				</div>

				<div class="mb-3">
					<label class="form-label">Имя* (не менее 3)</label><input class="form-control {{$errors->has('name') ? 'alert-danger' : ''}}" id="name" type="text" name="name" value="{{old('name')}}">	
				</div>

				<div class="mb-3">
					<label class="form-label">Фамилия* (не менее 5)</label><input class="form-control {{$errors->has('sname') ? 'alert-danger' : ''}}" id="sname" type="text" name="sname" value="{{old('sname')}}">	
				</div>

				{{ csrf_field() }}

				<div class="mb-3 text-center">
					<button class="btn btn-primary" type="submit">Отправить</button>
				</div>   	

			</td>
			</tr>
			</tbody>
			</table>
		</form>


		</div>
	</div>
</div>

</body>
</html>