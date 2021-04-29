@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 ">
      <div class="card">
        <div class="card-header">Display all Events</div>
        <div class="card-body">
          <table class="table table-striped" border="1">
            <tr>
              <th>Event</th>
              <td>{{$items->category}}</td>
            </tr>
            <tr>
              <th>Time </th>
              <td>{{$items->found_time}}</td>
            </tr>
            <tr>
              <th>User </th>
              <td>{{$items->found_user}}</td>
            </tr>
            <tr>
              <th>Place </th>
              <td>{{$items->found_place}}</td>
            </tr>
            <tr>
              <th>Organiser </th>
              <td>{{$items->organiser}}</td>
            </tr>
            <tr>
              <th>Notes </th>
              <td style="max-width:150px;">{{$items->description}}</td>
            </tr>

            <tr>
              <td colspan='2'>
                <img src="{{asset('storage/images/'.$items->image)}}">

              </td>
            </tr>
          </table>
          <table>
            <tr>
              <td><a href="{{route('items.index')}}" role="button">Back to
                  list</a></td>
              <td style="padding-left:20px"><a href="{{action('RequestsController@edit', $items['id'])}}" role="button">Request</a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection