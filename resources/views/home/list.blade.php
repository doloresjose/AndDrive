@extends('main')

@section('title', config('app.name'))

@section('content')

@if (session('drive') != null)
    <div class="alert alert-primary" role="alert" style="margin-top: 15px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        File yang anda upload melalui Andrive, Akan tampil di sini
    </div>
    @if ( $lists != null || !empty($lists))
        @foreach ($lists as $list)
          <div class="card" style="margin-top:  30px;">
              <h5 class="card-header">Nama File: {{$list->file_name}}</h5>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ route('download', ['id' => $list->file_id ]) }}" class="btn btn-primary">Download</a>
              </div>
          </div>
        @endforeach
    @else
        <div class="jumbotron" style="background-color:  white;text-align: center;">
            <h1 class="display-4" style="padding-top:20px;">Tidak ada file.</h1>
        </div>
    @endif
			
@else
    <h1>Please, Login First</h1>
@endif	

@endsection