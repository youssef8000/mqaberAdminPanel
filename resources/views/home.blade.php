@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <table class="table">
  <thead>
    <h1>بيانات العملاء</h1>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">الاسم</th>
      <th scope="col">التليفون</th>
      <th scope="col">مكان المعاينه</th>
      <th scope="col">يوم المحدد</th>
      <th scope="col">الوقت المحدد</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($user as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->mobile}}</td>
      <td>{{$data->place}}</td>
      <td>{{$data->day}}</td>
      <td>{{$data->time}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
</div>
@endsection
