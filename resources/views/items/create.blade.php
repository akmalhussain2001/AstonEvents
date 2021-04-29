<!-- inherite master template app.blade.php -->
@extends('layouts.app')
<!-- define the content section -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card">
                <div class="card-header">Create</div>
                <!-- display the errors -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul> @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li> @endforeach
                    </ul>
                </div><br /> @endif
                <!-- display the success status -->
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div><br /> @endif
                <!-- define the form -->
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{url('items') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-8">
                            <label>Event Type</label>
                            <select name="category">
                                <option value="sport">Sport</option>
                                <option value="culture">Culture</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <label>Time</label>
                            <input type="datetime" name="found_time" placeholder="yyyy-mm-dd hh:mm:ss" value="" />
                        </div>
                        <div class="col-md-8">
                            <label>User</label>
                            <input type="text" name="found_user" placeholder="User" />
                        </div>
                        <div class="col-md-8">
                            <label>Venue</label>
                            <input type="text" name="found_place" placeholder="Venue" />
                        </div>
                        <div class="col-md-8">
                            <label>Organiser</label>
                            <input type="text" name="organiser" placeholder="Organiser" />
                        </div>
                        <div class="col-md-8">
                            <label>Description</label><br>
                            <textarea rows="4" cols="50" placeholder="Description"></textarea>
                        </div>
                        <div class="col-md-8">
                            <label>Image</label>
                            <input type="file" name="image" placeholder="Image" />
                        </div>
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" />
                            <input type="reset" class="btn btn-primary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection