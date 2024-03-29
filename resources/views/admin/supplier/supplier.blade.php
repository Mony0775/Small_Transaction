@extends('layouts.admin')

@section('content')
<div class="pagetitle">
      <h1>Supplier</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Supplier</li>
        </ol>
      </nav>
</div><!-- End Page Title -->
<section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
          <table class="table datatable table-striped">
                <div class="row">
                  <div class="col-9">
                    <h4 class="col-md-6" style="float: left ; font-size: 40px;"><i class="bx bxs-business"></i></h4>
                  </div>
                  <div class="col-3">
                    <a href="" style="float: right" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Addsupplier"><i class="bi bi-plus-square-dotted"></i> Add New supplier</a>
                  </div>
                </div>
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Company</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Phone</th>
                    <th scope="col">
                      Action
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($suppliers as $key => $supplier)
                  <tr>
                    
                    <td>{{ $key+1 }}</td>
                    <td>{{ $supplier->supplier_name}}</td>
                    <td>{{ $supplier->company }}</td>
                    <td>{{ $supplier->first_name }}</td>
                    <td>{{ $supplier->last_name }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->job_title }}</td>
                    <td>{{ $supplier->phone_number }}</td>
                    <td>
                      <div class="btn-group">
                        <div class="mx-2">
                          <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Editsupplier{{ $supplier->id }}"><i class="bi bi-pencil"></i></a>
                          <a href="" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#Deletesupplier{{ $supplier->id }}"><i class="bi bi-trash"></i></a>
                        </div>
                        
                      </div>
                    </td>  
                  </tr>
                  <!-- Edit Modal -->
                  <div class="modal right fade" id="Editsupplier{{ $supplier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title text-warning" id="exampleModalLabel">Edit supplier</h4>
                          <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-bs-label="Close">
                            <span aria-bs-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="row g-3 d-flex" action="{{ route('suppliers.update',$supplier->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row py-2">                            
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" value="{{ $supplier->name }}" id="floatingName" name="name" placeholder="User Name">
                                  <label for="floatingName">User Name</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="email" class="form-control" value="{{ $supplier->email }}" name="email" id="floatingEmail" placeholder="Your Email">
                                  <label for="floatingEmail">Your Email</label>
                                </div>
                              </div>
                            </div>
                            <div class="row py-2">
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="first_name" value="{{ $supplier->first_name }}" id="floatingFirstName" placeholder="First Name">
                                  <label for="floatingFirstName">First Name</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="last_name" value="{{ $supplier->last_name }}" id="floatingLastName" placeholder="Last Name">
                                  <label for="floatingLastName">Last Name</label>
                                </div>
                              </div>
                            </div>
                            <div class="row py-2">
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="company" value="{{ $supplier->company }}" id="floatingCompany" placeholder="Company">
                                  <label for="floatingLastName">Company</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="job_title" value="{{ $supplier->job_title }}" id="floatingJob" placeholder="Job Title">
                                  <label for="floatingJob">Job Title</label>
                                </div>
                              </div>
                            </div>
                            <div class="row py-2">
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="phone_number" value="{{ $supplier->phone_number }}" id="floatingPhone" placeholder="Phone Number">
                                  <label for="floatingPhone">Phone Number</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-floating">
                                  <input type="text" class="form-control" name="webpage" value="{{ $supplier->webpage }}" id="floatingWebpage" placeholder="Webpage">
                                  <label for="floatingJob">Webpage</label>
                                </div>
                              </div>
                            </div>
                            <div class="row py-2">                             
                              <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ $supplier->street }}" name="street" id="floatingStreet" placeholder="Street">
                                    <label for="floatingStreet">Street</label>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="col-md-12">
                                  <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ $supplier->city }}" name="city" id="floatingCity" placeholder="City">
                                    <label for="floatingCity">City</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row py-2">
                              <div class="col-md-4">
                                <div class="form-floating mb-3">
                                  <input class="form-control" name="country" value="{{ $supplier->country }}" id="floatingSelect" aria-label="Country">
                                  <label for="floatingSelect">Country</label>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-floating mb-3">
                                  <input class="form-control" name="province" value="{{ $supplier->province }}" id="floatingSelect" aria-label="Province">
                                  <label for="floatingSelect">State</label>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-floating">
                                  <input type="text" class="form-control" value="{{ $supplier->zip_code }}" name="zip_code" id="floatingZip" placeholder="Zip">
                                  <label for="floatingZip">Zip</label>
                                </div>
                              </div>
                            </div>
                              <div class="col-12">
                                <div class="form-floating">
                                  <textarea class="form-control" value="{{ $supplier->note }}" name="note" placeholder="Note" id="floatingTextarea" style="height: 100px;"></textarea>
                                  <label for="floatingTextarea">Note</label>
                                </div>
                              </div>
                            </div>
                            <div class="text-center py-2">
                              <button type="submit" class="btn btn-warning">Update</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Delete Modal -->
                  <div class="modal right fade" id="Deletesupplier{{ $supplier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="exampleModalLabel">Delete supplier</h4>
                          <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-bs-label="Close">
                            <span aria-bs-hidden="true">&times;</span>
                          </button>
                                            
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('suppliers.destroy',$supplier->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <p>Are you sure to delete {{$supplier->name}} ?</p>
                            <div class="modal-footer">
                              <button class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

<!-- modal create new customer -->
<!-- Add Modal -->
<div class="modal right fade" id="Addsupplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Add supplier</h4>
        <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-bs-label="Close">
          <span aria-bs-hidden="true"><i class="bi bi-file-x-fill"></i></span>
        </button>
      </div>
      <div class="modal-body">
                
            <form class="row g-3" action="{{ route('suppliers.store') }}" method="post">
              @csrf
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="User Name">
                    <label for="floatingName">User Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="first_name" id="floatingFirstName" placeholder="First Name">
                    <label for="floatingFirstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="last_name" id="floatingLastName" placeholder="Last Name">
                    <label for="floatingLastName">Last Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="company" id="floatingCompany" placeholder="Company">
                    <label for="floatingLastName">Company</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="job_title" id="floatingJob" placeholder="Job Title">
                    <label for="floatingJob">Job Title</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="phone_number" id="floatingPhone" placeholder="Phone Number">
                    <label for="floatingPhone">Phone Number</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="webpage" id="floatingWebpage" placeholder="Webpage">
                    <label for="floatingJob">Webpage</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="street" id="floatingStreet" placeholder="Street">
                      <label for="floatingStreet">Street</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" name="city" id="floatingCity" placeholder="City">
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" name="country" id="floatingSelect" aria-label="Country">
                    <label for="floatingSelect">Country</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <input class="form-control" name="province" id="floatingSelect" aria-label="Province">
                    <label for="floatingSelect">State</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-floating">
                    <input type="text" class="form-control" name="zip_code" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="note" placeholder="Note" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Note</label>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
      </div>
    </div>
  </div>
</div>

<style>
    .modal.right .modal-dialog {
        top: 0;
        right: 0;
        margin-right: 20vh;
        /* position: absolute; */

    }
    .modal.fade:not(.in).right .modal-dialog {
        -webkit-transform: translate3d(25%, 0, 0);
        transform: translate3d(25%,0,0);
    }
    select {
        appearance: auto;
        border-radius: 0;
        }
    select::-ms-expand{
        display: block;
    }
</style>

@endsection
