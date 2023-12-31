@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('MENU Jadwal Periksa') }}
                    <h3>Data Poli</h3>
 
                    <a href="{{ route('tambahjadwal') }}"> + Tambah Jadwal</a>
                    
                    <br/>
                    <br/>
                
                    <table border="1">
                        <tr>
                            <th>Dokter</th>
                            <th>Hari</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                        </tr>
                        @foreach($jadwal as $p)
                        <tr>
                            <td>{{ $p->dokter->nama }}</td>
                            <td>{{ $p->hari }}</td>
                            <td>{{ $p->jam_mulai }}</td>
                            <td>
                                {{$p->jam_selesai}}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
