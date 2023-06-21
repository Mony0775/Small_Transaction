@extends('layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Inventories</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/employee/dashboard">Home</a></li>
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
              <th scope="col">Preview</th>
              <th scope="col">Product</th>
              <th scope="col">Available Stock</th>
              <th scope="col">Sale Price</th>
              <th scope="col">Purchase Price</th>
              <th scope="col">Order Amt.</th>
              <th scope="col">Purchase Amt.</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 1; $i <= count($item); $i++) <tr>
              <td><img src="{{ asset('images/product/'.$items[$i][0]->image)}}" alt="" width="80px" height="80px"></td>
              <td><b>{{$items[$i][0]->product_name}}</b></td>
              <td>
                @if ($items[$i][0]->alert_stock <= 30) <span class="badge badge-danger text-danger"> {{$items[$i][0]->alert_stock}} Low Stock</span>
                  @elseif ($items[$i][0]->alert_stock >= 100)
                  <span class="badge badge-success text-warning">{{$items[$i][0]->alert_stock}} High Stock</span>
                  @else
                  <span class="badge badge-success text-success">{{$items[$i][0]->alert_stock}}</span>
                  @endif
              </td>
              <td>$ {{$items[$i][0]->sale_price}}</td>
              <td>$ {{$items[$i][0]->standard_price}}</td>
              <td class="fw-bold">{{$item[$i]}}</td>
              <td>{{$itemS[$i]}}</td>
              </tr>
              @endfor
          </tbody>
        </table>
        <!-- End Table with stripped rows -->
      </div>
    </div><!-- End Left side columns -->
  </div>
</section>

@endsection