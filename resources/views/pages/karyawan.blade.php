@extends('layouts.app')

@section('content')
<h1 class="py-1">Daftar Karyawan</h1>
@include('layouts.components.buttons.btn_add')
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Email</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Divisi</th>
      <th scope="col">Edit</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fauzan</td>
      <td>Laki-laki</td>
      <td>Jakarta</td>
      <td>085155302332</td>
      <td>16maret2001@gmail.com</td>
      <td>Jabatan</td>
      <td>Divisi</td>
      <td>@include('layouts.components.buttons.btn_edit')</td>
      <td>@include('layouts.components.buttons.btn_del')</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Fauzan2</td>
      <td>Laki-laki2</td>
      <td>Jakarta2</td>
      <td>0851553023322</td>
      <td>16maret2001@gmail.com2</td>
      <td>Jabatan2</td>
      <td>Divisi2</td>
      <td>@include('layouts.components.buttons.btn_edit')</td>
      <td>@include('layouts.components.buttons.btn_del')</td>
    </tr>
  </tbody>
</table>
@endsection