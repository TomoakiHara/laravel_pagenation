<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>
@section('title', 'delete.blade.php')

@section('content')
<form action="/delete" method="POST">
  <table>
  @csrf
    <tr>
      <th>id</th>
      <td><input type="text" name="id" value="{{$form->id}}"></td>
    </tr>
    <tr>
      <th>name</th>
      <td><input type="text" name="name" value="{{$form->name}}"></td>
    </tr>
    <tr>
      <th>age</th>
      <td><input type="text" name="age" value="{{$form->age}}"></td>
    </tr>
    <tr>
      <th>nationality</th>
      <td><input type="text" name="nationality" value="{{$form->nationality}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><button>送信</button></td>
    </tr>
  </table>
</form>
@endsection
</body>
</html>