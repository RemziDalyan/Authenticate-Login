@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kullanıcı Bilgileri</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="">
                      <div class="row">
                        <label class="col-md-3">Kullanıcı Adı:</label>
                        {{auth()->user()->username}}
                      </div>
                      <div class="row">
                        <label class="col-md-3">Adı:</label>
                        {{auth()->user()->name}}
                      </div>
                      <div class="row">
                        <label class="col-md-3">Soyadı:</label>
                        {{auth()->user()->surname}}
                      </div>
                      <div class="row">
                        <label class="col-md-3">Adresi:</label>
                        {{auth()->user()->adress}}
                      </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
