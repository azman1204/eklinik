@extends('layout')

@section('title')
Zon IKM
@endsection

@section('content')
<div class="col-md-2"></div>
<div class="col-md-6">
    <div class="row">
        <div class="col-md-2">Kod</div>
        <div class="col-md-10"><input type="text" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-2">Nama IKM</div>
        <div class="col-md-10"><input type="text" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10"><input type="submit" class="btn btn-primary"></div>
    </div>
</div> 
@endsection
