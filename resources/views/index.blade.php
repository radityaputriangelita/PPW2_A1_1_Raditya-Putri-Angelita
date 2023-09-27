@extends('master')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama Barang</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">id supplier</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data_barang as $barang)
    <tr>
      <td>{{$barang->id}}</td>
      <td>{{$barang->nama_barang}}</td>
      <td>{{"Rp ".number_format($barang->harga, 2, ',', '.')}}</td>
      <td>{{$barang->stok}}</td>
      <td>{{$barang->id_supplier}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection