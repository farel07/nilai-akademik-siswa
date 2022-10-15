@extends('dashboard.layout.main')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Master User : Siswa</h1>
</div>

<div class="row">
    <div class="col-md-9">

        <table class="table">
            <thead>
              <tr class="table-primary">
                <th scope="col">NO</th>
                <th scope="col">NISN</th>
                <th scope="col">NAMA</th>
                <th scope="col">TEMPAT TANGGAL LAHIR</th>
                <th scope="col">KELAS</th>
                <th scope="col">ACTION</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $s->nisn_npsn }}</td>
                  <td>{{ $s->name }}</td>
                  <td>{{ $s->tempat_lahir . ', ' . $s->tanggal_lahir}}</td>
                  <td>{{ $s->kelas_user->kelas->nama_kelas }}</td>
                  <td></td>
                </tr>

                @endforeach
            </tbody>
          </table>

    </div>
</div>

@endsection