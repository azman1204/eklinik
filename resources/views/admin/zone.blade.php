@extends('layout')

@section('title')
Zon IKM
@endsection

@section('content')
<a href="{{ url('admin/zone/form') }}" class="btn btn-success btn-sm">+ Tambah</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Kod</th>
            <th>Nama</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tr>
        <td>1.</td>
        <td>IKMZU</td>
        <td>IKM Zon Utara</td>
        <td>
            <span class="fa fa-pencil"></span>
            <span class="fa fa-trash"></span>
        </td>
    </tr>
    <tr>
        <td>2.</td>
        <td>IKMZS</td>
        <td>IKM Zon Selatan</td>
        <td>
            <span class="fa fa-pencil"></span>
            <span class="fa fa-trash"></span>
        </td>
    </tr>
    <tr>
        <td>3.</td>
        <td>IKMZT</td>
        <td>IKM Zon Timur</td>
        <td>
            <span class="fa fa-pencil"></span>
            <span class="fa fa-trash"></span>
        </td>
    </tr>
</table>

@endsection
