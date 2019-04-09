@extends('layout')

@section('title')
Zon IKM
@endsection

@section('content')

<div class="row">
    <div class="col-md-1">Kod</div>
    <div class="col-md-4"><input type="text" class="form-control"></div>
</div>
<div class="row">
    <div class="col-md-1">Nama IKM</div>
    <div class="col-md-4"><input type="text" class="form-control"></div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4"><input type="submit" class="btn btn-primary"></div>
</div>
@endsection
