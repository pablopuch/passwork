@extends('layouts.app')

@section('template_title')
    Passwork
@endsection

@section('content')

    <div class="container-fluid">

        {{-- <div>
            <form action="{{route('passwork.index')}}" method="get">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                        <input style="margin-top: 10px" type="submit" class="btn btn-primary" value="Buscar">
            </form>
        </div>
         --}}

        <div class="row">
            
            <div style="margin-top: 10px">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" >
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <a href="{{ route('passwork.create') }}" class="btn btn-primary" type="button">{{ __(' + Crear PassWork') }}</a>
                {{-- <a href="{{ route('passwork.create') }}" class="btn btn-primary" type="button">{{ __(' + Crear Grupo') }}</a> --}}
            </div>


            

                
            @foreach ($passworks as $passwork)
  
                <div class="col-3" style="margin-top: 30px">
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