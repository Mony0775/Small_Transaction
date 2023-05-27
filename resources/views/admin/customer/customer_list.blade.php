@extends('layouts.admin')

@section('content')
<div class="pagetitle">
      <h1>Customer</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Customer</a></li>
          <li class="breadcrumb-item active">Customer List</li>
        </ol>
      </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <div class="card">
              <div class="card-header">
                <h4 style="float: left">Add Customer</h4>
                <a href="" style="float: right" class="btn btn-dark" data-toggle="modal" data-target="#Addcustomer"><i class="fa fa-plus"></i> Add New Customer</a>
              </div>          
              <table class="table datatable table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr>
                </tbody>
          </table>
            </div>

              <!-- End Table with stripped rows -->
          </div>
        </div><!-- End Left side columns -->
      </div>

      <!-- Add Modal -->
      <div class="modal right fade" id="Addcustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Add Customer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form action="#" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="">Name</label>
                          <input type="text" class="form-control" name="customer_name" id="">
                      </div>
                      <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" class="form-control" name="email" id="">
                      </div>
                      <div class="form-group">
                          <label for="">Address</label>
                          <input type="text" class="form-control" name="address" id="">
                      </div>
                      <div class="form-group">
                          <label for="">Phone</label>
                          <input type="text" class="form-control" name="phone" id="">
                      </div>
                      <div class="modal-footer">
                          <button class="btn btn-primary btn-block">Save Customer</button>
                      </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
