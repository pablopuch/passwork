@extends('layouts.app')

@section('content')
<div class="container">


    <form action="{{ url('passwork') }}" method="POST" enctype="multipart/form-data">
    @csrf

        @include('passwork.form', ['mode' => 'Crear'])

    </form>

</div>
@endsection