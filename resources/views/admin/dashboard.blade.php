@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{ $data['totalActiveUser'] }}</h3>
        <p>Active Users</p>
      </div>
      <div class="icon">
        <i class="fas fa-user"></i>
      </div>
      <a href="{{ route('admin.users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{ $data['totalCategory'] }}</h3>
        <p>Active Category</p>
      </div>
      <div class="icon">
        <i class="fas fa-certificate"></i>
      </div>
      <a href="{{ route('admin.category.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{ $data['totalBanner'] }}</h3>
        <p>Banners Added</p>
      </div>
      <div class="icon">
        <i class="fas fa-credit-card"></i>
      </div>
      <a href="{{ route('admin.banner.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ request()->ip() }}</h3>
        <p>My IP Address</p>
      </div>
      <div class="icon">
        <i class="fas fa-terminal"></i>
      </div>
      <a href="#" class="small-box-footer">&nbsp;</i>
      </a>
    </div>
  </div>
</div>
@stop
