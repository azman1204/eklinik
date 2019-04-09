@extends('layout')

@section('title')
Audit Trail
@endsection

@section('content')
<div class="col-md-10 well">
    <div class="row">
        <div class="col-md-4"><input type="text" class="form-control" placeholder="Nama Staf"></div>
        <div class="col-md-2"><input type="text" class="form-control" placeholder="Tarikh Dari"></div>
        <div class="col-md-2"><input type="text" class="form-control" placeholder="Tarikh Hingga"></div>
        <div class="col-md-2"><input type="button" class="btn btn-primary" value="cari"></div>
    </div>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Modul</th>
            <th>Data</th>
            <th>Tarikh / Masa</th>
            <th>IP</th>
            <th>Ref</th>
            <th>URL</th>
        </tr>
    </thead>
    <tr>
        <td>1.</td>
        <td>Azman Zakaria</td>
        <td>Login</td>
        <td>Userid=azman</td>
        <td>09/04/2019 14:30:23</td>
        <td>169.10.23.12</td>
        <td>-</td>
        <td>/login</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Jon Doe</td>
        <td>Dashboard</td>
        <td>-</td>
        <td>09/04/2019 12:30:23</td>
        <td>169.10.23.13</td>
        <td>/login</td>
        <td>/dashboard</td>
    </tr>
</table>
@endsection
