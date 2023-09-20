{{--CREATE INVOICE FORM--}}

@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <h1>Create Invoice</h1>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Number</label>
                                    <input type="text" class="form-control" placehold="invoice number" name="number">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="mb-3">
                                    <label class="form-label">Data</label>
                                    <input type="text" class="form-control" placehold="invoice data" name="data">
                                </div>
                            </div>
                            
                                <div class="mb-3">
                                    <label class="form-label">Client</label>
                                    <input type="text" class="form-control" placehold="client name" name="name">
                                </div>
                            
                            <div>
                                <p class="card-text">With supporting text</p>
                                <a href="#" class="btn btn-primary">Go go go</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection