<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @extends('layouts.default')
<style>
p {
  background-color: #289ADC;
  color: white;
  padding: 5px 10px;
  width: 500px;
}
</style>
</head>
<body>
@section('title', 'check.blade.php')

@section('content')
<form action="/back" method="GET">
  @csrf
  <p>入力した値は「{{ $data }}」でお間違いないでしょうか</p>
  <button type="submit" class="check-btn" value="true">入力画面に戻る</button>
<form>
@endsection
</body>
</html>