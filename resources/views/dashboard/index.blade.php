@extends('dashboard.layout.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
  {{ $users[0]->kelas_user->kelas }}
  <p>test</p>
@endsection



  
