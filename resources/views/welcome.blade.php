@extends('layouts.main')
@section ('content')
<div >
    <h1 class="text-center my-5"> Home Page </h1>
    
    @if (session('successMsg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successMsg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

</div>
@endsection
