@extends('layout.master')

@section('main_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Item</h1>

            <a href="{{ url('item') }}" class="btn btn-primary">List</a>
            <a href="{{ url('item/create') }}" class="btn btn-primary">Create</a>

            <hr>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Table
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->code }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop
