@extends('layouts.app')

@section('title', '| Projects')
@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
  {{ session()->get('success') }}
</div>
@endif
<h1 class="display-3">Passenger Data</h1>
<!-- Row -->
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default card-view">
      <div class="panel-wrapper collapse in">
        <div class="panel-body">
          <div class="table-wrap">
            <div class="table-responsive">
              <table id="datable_1" class="table table-hover display  pb-30">
                <thead>
                  <tr class="text-nowrap">
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Seats</th>
                    <th>creat_at</th>

                  </tr>
                </thead>
                <tfoot>
                  <tr class="text-nowrap">
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Seat</th>
                    <th>creat_at</th>

                  </tr>
                </tfoot>
                <tbody>

                  @foreach($bookings as $booking)
                  <tr class="text-justify">
                    <td>{{$booking->id}}</td>
                    @if(isset($booking->user->name))
                    <td>{{$booking->user->name}}</td>
                    @endif
                    @if(isset($booking->passenger->name))
                    <td>{{$booking->passenger->name}}</td>
                    @endif
                    @if(isset($booking->passenger->email))
                    <td>{{$booking->passenger->email}}</td>
                    @endif
                    @if(isset($booking->user->email))
                    <td>{{$booking->user->email}}</td>
                    @endif
                    <td> {{implode(', ', (array)$booking['bus_seat'])}}</td>
                    <td>{{$booking->created_at}}</td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection