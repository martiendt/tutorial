@extends('layout.master')

@section('main_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Supplier</h1>

            <a href="{{ url('supplier') }}" class="btn btn-primary">List</a>
            <a href="{{ url('supplier/create') }}" class="btn btn-primary">Create</a>

            <hr>

            <div class="panel panel-default">
                <div class="panel-heading">
                    New Supplier
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="{{ url('supplier') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" class="form-control">
                                </div>

                                <input type="submit" value="Submit">
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->


        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop
