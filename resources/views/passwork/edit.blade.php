@extends('layouts.app')

@section('content')
<div class="container">

    <form action="{{ route('passwork.update', $passwork->id) }}" method="POST" role="form" enctype="multipart/form-data">

        @csrf
        {{ method_field('PATCH') }}

        @include('passwork.form', ['mode' => 'Guardar'])

    </form>
</div>
@endsection