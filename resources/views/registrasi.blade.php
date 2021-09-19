@extends('layouts.app', ['title' => 'Registrasi'])

@section('content')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-light" style="background: #58b431ff">Pendaftaran Pengguna LPMS</div>

                <div class="card-body">
                    <form method="" action="">

                        <div class="form-group row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Username</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nama asli</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6 ">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="" class="col-md-4 col-form-label text-md-right">Nomor Telp/HP</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="" value="" required autocomplete="" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="" class="col-md-4 col-form-label text-md-right">NIK</label>
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="" value="" required autocomplete="" autofocus>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="form-check col-md-7 offset-md-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Dengan mengisi anda telah menyetujui Ketentuan Layanan dan Kebijakan Privasi Kami
                                </label>
                            </div>
                        </div>


                        <hr>
                        
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-success">
                                        Register
                                    </button>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-danger">
                                        Batal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection