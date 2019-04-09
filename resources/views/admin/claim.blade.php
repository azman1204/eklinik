@extends('layout')

@section('title')
Had Tuntutan
@endsection

@section('content')
<div class="col-md-2"></div>
<div class="col-md-6">
    <div class="row">
        <div class="col-md-4">Had tuntutan staf kontrak</div>
        <div class="col-md-8"><input type="text" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-4">Had tuntutan staf tetap</div>
        <div class="col-md-8"><input type="text" class="form-control"></div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8"><input type="submit" class="btn btn-primary"></div>
    </div>
</div> 
@endsection
