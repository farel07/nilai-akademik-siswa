@extends('dashboard.layout.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
     <div class="card shadow h-100 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         SISWA</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($siswa) }}</div>
                 </div>
                 <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
             </div>
         </div>
     </div>
 </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
     <div class="card shadow h-100 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         GURU</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($guru) }}</div>
                 </div>
                 <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
    <div class="col-xl-3 col-md-6 mb-4">
     <div class="card shadow h-100 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         KELAS</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($kelas) }}</div>
                 </div>
                 <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
    <div class="col-xl-3 col-md-6 mb-4">
     <div class="card shadow h-100 py-2">
         <div class="card-body">
             <div class="row no-gutters align-items-center">
                 <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                         MAPEL</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($mapel) }}</div>
                 </div>
                 <div class="col-auto">
                     <i class="fas fa-calendar fa-2x text-gray-300"></i>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 </div>

  <br>
{{-- {{ $users[0]->guru_mapel }} --}}
@foreach ($users[0]->guru_mapel as $mapel)
    Mapel : {{ $mapel->nama_mapel }} <br>
    @foreach ($mapel->nama_nilai as $nl)
        teknik : {{ $nl->teknik }} <br>
        nama penilaian : {{ $nl->pivot->nama }} <br>
        {{-- nama penilaian : {{  }} --}}
    @endforeach
    <hr>
    {{-- {{ $mapel->nama_nilai }} --}}
    {{-- {{ $mapel->nama_nilai }} --}}
@endforeach

@foreach ($users[1]->nilai_siswa as $n)
    {{ $users[1]->name }}
     {{ $n->nilai }}
     {{ $n->mapel->nama_mapel }}
     {{ $n->nama_nilai->nama }}
     {{ $n->nama_nilai->guru_mapel->user->name }}
     {{-- {{ $n->mapel->nama_nilai }} --}}
@endforeach

<br>
<br>
<hr>
@foreach ($nilai as $nilai_siswa)
    {{ $nilai_siswa->nilai }}
    {{ $nilai_siswa->user->name }}
    {{ $nilai_siswa->nama_nilai }}
    {{ $nilai_siswa->nama_nilai->guru_mapel->user->name }}
@endforeach

  <p>test</p>
@endsection



  
