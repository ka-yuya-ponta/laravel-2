<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>{{$txt}}</p>
@if (count($errors) > 0)
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  @endif


<form action="/hello" method="post">
<table>
@csrf
<tr>
<th>name:</th>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<th>mail:</th>
<td>
<input type="text" name="mail">
</td>
</tr>
<tr>
<th>age:</th>
<td>
<input type="text" name="age">
</td>
</tr>
</table>
<input type="submit">
</form>

</body>
</html>