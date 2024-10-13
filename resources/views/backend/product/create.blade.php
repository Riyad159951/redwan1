@extends('backend.layouts.master')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Product Create</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Product
                                </li>
                            </ol>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                                <div class="card-header">
                                    <div class="card-title">Quick Example</div>
                                </div> <!--end::Header--> <!--begin::Form-->
                                <form action="{{ url('product/store') }}" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3"> 
                                            <label for="name" class="form-label">Nane</label> 
                                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">                                     
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="text" name="price" class="form-control" id="price" aria-describedby="emailHelp">
                                            </div>
                                        <div class="mb-3"> 
                                            <label for="descreption" class="form-label">Descreption</label> 
                                            <textarea class="form-control" name="descreption" id="descreption"></textarea>                                        
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control" id="image" aria-describedby="emailHelp">
                                            </div>
                                        
                                    </div> <!--end::Body--> <!--begin::Footer-->
                                    <div class="card-footer"> 
                                        <button type="submit" class="btn btn-primary">Submit</button> 
                                    </div> <!--end::Footer-->
                                </form> <!--end::Form-->
                            </div>
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
    @endsection