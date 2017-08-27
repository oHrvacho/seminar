@extends('layouts.index')

@section('title', 'gfdsgfdg')
@section('content')
<div class="row">
    <div class="jumbotron" style="text-align: center;">
        <h3>Pozivamo vas na vjenčanje Mateje i Hrvoja</h3>
        <a class="btn background-green" href="{{ route('pozivnica.index.form') }}" role="button">Ulazak</a>
  </div>
</div>
@stop
<div>
<a href="{{ route('admin.dashboard') }}">Admin</a>
</div><!-- /.navbar-collapse -->