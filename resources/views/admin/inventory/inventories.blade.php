@extends('layouts.admin')

@section('content')
<div class="pagetitle">
  <h1>Inventories</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
      <li class="breadcrumb-item active">Inventories</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
  <div class="row">
    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">
        <table class="table datatable table-striped" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Product</th>
              <th>Available</th>
              <th>Order</th>
              <th>Purchase</th>
              <th>Shipped</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inventories as $key => $inventory)
            <tr>
              <td>{{ $key+1 }}</td>
              <td>{{ $inventory-> product_name }}</td>
              <td>{{ $inventory-> alert_stock }}</td>
              <td>{{ $inventory-> order}}</td>
              <td>{{ $inventory-> purchase }}</td>
              <td>{{ $inventory-> shipping_date }}</td>
              <td>
                <a href="{{ route('purchases.index') }}">Add New Stock</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table with stripped rows -->
      </div>
    </div><!-- End Left side columns -->
  </div>
</section>

@endsection