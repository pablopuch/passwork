
        <center>
                <h1> {{ $mode }} Passwork</h1>
        </center>
        <div class="grid text-center">

                    @if(count($errors)>0)
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3 mt-3">
                        <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ isset($passwork->name)?$passwork->name:old('name') }}" id="name">
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ isset($passwork->email)?$passwork->email:old('email') }}" id="email">
                    </div>

                    <div class="mb-3 mt-3" id="password-container">
                            <input type="password" name="pass" class="form-control" placeholder="Contraseña" value="{{ isset($passwork->pass)?$passwork->pass:old('pass')}}" id="password">
                            <i class="fa-solid fa-eye" id="eye"></i>
                    </div>

                    <div class="mb-3 mt-3">
                        <input type="text" name="note" class="form-control" placeholder="Nota" value="{{ isset($passwork->note)?$passwork->note:old('note') }}" id="note">
                    </div>

                    <div class="g-col-4">

                        <div class="box-footer mt20">
                            <input type="submit" class="btn btn-primary" style="margin-top: 10px;" value="{{ $mode }} PassWork">
                        </div>

                    </div>

            </div>
