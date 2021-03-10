<!DOCTYPE html>
<html>
<body>

<h2>Добавлен новый пользователь <h2>

@if($email)
	<h3>{{$email}}</h3><br/>
@endif

@if($name)
	<h3>{{$name}}</h3><br/>
@endif

@if($sname)
	<h3>{{$sname}}</h3>
@endif

</body>
</html>