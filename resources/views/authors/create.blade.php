@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Author
                        <a href="{{ URL::to('authors') }}" class="pull-right">List all</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        
                        <form method="post" action="{{url('authors')}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">AuthorName</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="author_name" name="author_name">
                                </div>
                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <input type="submit" class="btn btn-primary">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
