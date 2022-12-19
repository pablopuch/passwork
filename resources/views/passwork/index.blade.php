@extends('layouts.app')

@section('template_title')
    Passwork
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row g-12">

            
            <div class="col">
                <a href="{{ route('passwork.create') }}" class="btn btn-primary" type="button">{{ __(' + Crear PassWork') }}</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" >
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a href="{{ route('passwork.create') }}" class="btn btn-primary" type="button">{{ __(' + Crear Grupo') }}</a>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" >
                        <p>{{ $message }}</p>
                    </div>
                @endif
            </div>

            {{-- <form action="{{route('passwork.index')}}" method="get">
                <div class="row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-sm-4 my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                </div>
            </form> --}}


                
            @foreach ($passworks as $passwork)
  
                <div class="col-md-3" style="margin-top: 30px">
                    <a href="{{ route('passwork.show',$passwork->id) }}">

                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">
                                    <center>
                                        <b>{{ $passwork->name }}</b>
                                    </center>
                                </h2>
                            </div>
                        </div>
                        
                    </a>
                </div>

            @endforeach
            
            <div style="margin-top: 30px">
                {!! $passworks->links() !!}
            </div>

        </div> 
    </div>
@endsection