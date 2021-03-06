@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">Edit and update</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br />
                @endif
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ action('ItemsController@update',
$item['id']) }} " enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="col-md-8">
                            <label>category</label>
                            <input type="text" name="category" value="{{$item->category}}" />
                        </div>
                        <!--ADD REST OF THE HEADINGS IN THE ITEMS TABLE HERE-->
                        <div class="col-md-8">
                            <label>Image</label>
                            <input type="file" name="image" />
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" />
                            <input type="reset" class="btn btn-primary" />
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection