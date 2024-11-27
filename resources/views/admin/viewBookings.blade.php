@extends('../frontend/layouts/main')
@section('main-section')
   <style>
    body{
        background: rgb(33, 33, 33);
        color: whitesmoke;
    }
      svg{
        height: 20px;
      }
      @media screen and (max-width: 780px) {
  
         .container{

   }
     
        th, td {
          font-size: 12px;
        
        }
}
      @media screen and (max-width: 520px) {
  
         .container{

   }
   
        th, td {
          font-size: 8px;
          /* word-wrap:break-word ; */
          word-break: initial;
  
        }
}
  
    </style>
<div class="container" style="padding-top: 100px">

    <table class="table">
        <h2>Book this tour </h2>
  <thead>
    <tr>
      <th scope="col" class="border border-2 bg-danger">Sno</th>
      <th scope="col" class="border border-2 bg-primary">Tour</th>
      <th scope="col" class="border border-2 bg-primary">Name</th>
      <th scope="col" class="border border-2 bg-primary">Email</th>
      <th scope="col" class="border border-2 bg-primary">Number</th>
      <th scope="col" class="border border-2 bg-primary">Adult</th>
      <th scope="col" class="border border-2 bg-primary">Child</th>
      <th scope="col" class="border border-2 bg-primary">Date</th>
      <th scope="col" class="border border-2 bg-primary">Added</th>

    </tr>
  </thead>
  <tbody>
    @php
        $no=1
    @endphp
    @foreach ($TourBookings as $bookings)
        
    <tr>
      <th scope="row" class="border border-2">{{$no}}</th>
      <td  class="border border-2">{{ $bookings->tourTitle}}</td>
      <td class="border border-2">{{ $bookings->name}}</td>
      <td class="border border-2">{{ $bookings->email}}</td>
      <td class="border border-2">{{$bookings->number}}</td>
      <td class="border border-2">{{$bookings->adult}}</td>
      <td class="border border-2">{{$bookings->child}}</td>
      <td class="border border-2">{{ $bookings->date}}</td>
   <td class="border border-2">{{ $bookings->created_at->format('Y-m-d') }}</td>

      {{-- <td class="border border-2">{{ $bookings->created_at}}</td> --}}
    
            {{-- <td> --}}
      {{-- <a href="{{ route('bookings.delete', ['id' => $bookings->bookings_id]) }}" class="btn btn-sm btn-danger">Move to trash</a> --}}

            {{-- </td> --}}
      </tr>
      @php
          $no++
      @endphp
    @endforeach
 
  </tbody>
</table>
<div class="container my-5">
<div class="row">

  {{ $TourBookings->links() }}
</div>

</div>
</div>


<div class="container" style="margin-top: 50px">

    <table class="table">
        <h2>Book Now Form </h2>
  <thead>
    <tr>
      <th scope="col" class="border border-2 bg-danger">Sno</th>
      <th scope="col" class="border border-2 bg-primary">Name</th>
      <th scope="col" class="border border-2 bg-primary">Email</th>
      <th scope="col" class="border border-2 bg-primary">Number</th>

      <th scope="col" class="border border-2 bg-primary">Destination</th>
      <th scope="col" class="border border-2 bg-primary">Added</th>

    </tr>
  </thead>
  <tbody>
    @php
        $no=1
    @endphp
    @foreach ($bookNowDetails as $bookings)
        
    <tr>
      <th scope="row" class="border border-2">{{$no}}</th>
      <td class="border border-2">{{ $bookings->name}}</td>
      <td class="border border-2">{{ $bookings->email}}</td>
      <td class="border border-2">{{$bookings->number}}</td>
      <td class="border border-2">{{ $bookings->destination}}</td>
   <td class="border border-2">{{ $bookings->created_at->format('Y-m-d') }}</td>

    
            {{-- <td> --}}
      {{-- <a href="{{ route('bookings.delete', ['id' => $bookings->bookings_id]) }}" class="btn btn-sm btn-danger">Move to trash</a> --}}

            {{-- </td> --}}
      </tr>
      @php
          $no++
      @endphp
    @endforeach
 
  </tbody>
</table>
<div class="container my-5">
<div class="row">

  {{ $bookNowDetails->links() }}
</div>

</div>
</div>





<div class="container" style="margin-top: 50px">

    <table class="table">
        <h2>Services Form </h2>
  <thead>
    <tr>
      <th scope="col" class="border border-2 bg-danger">Sno</th>
      <th scope="col" class="border border-2 bg-primary">Title</th>
      <th scope="col" class="border border-2 bg-primary">Name</th>
      <th scope="col" class="border border-2 bg-primary">Email</th>
      <th scope="col" class="border border-2 bg-primary">Number</th>

      <th scope="col" class="border border-2 bg-primary">Date</th>
      <th scope="col" class="border border-2 bg-primary">City</th>
      <th scope="col" class="border border-2 bg-primary">Added</th>

    </tr>
  </thead>
  <tbody>
    @php
        $no=1
    @endphp
    @foreach ($servicesDetails as $bookings)
        
    <tr>
      <th scope="row" class="border border-2">{{$no}}</th>
      <td class="border border-2">{{ $bookings->serviceTitle}}</td>
      <td class="border border-2">{{ $bookings->name}}</td>
      <td class="border border-2">{{ $bookings->email}}</td>
      <td class="border border-2">{{$bookings->number}}</td>
      <td class="border border-2">{{ $bookings->date}}</td>
      <td class="border border-2">{{ $bookings->city}}</td>
   <td class="border border-2">{{ $bookings->created_at->format('Y-m-d') }}</td>

    
            {{-- <td> --}}
      {{-- <a href="{{ route('bookings.delete', ['id' => $bookings->bookings_id]) }}" class="btn btn-sm btn-danger">Move to trash</a> --}}

            {{-- </td> --}}
      </tr>
      @php
          $no++
      @endphp
    @endforeach
 
  </tbody>
</table>
<div class="container my-5">
<div class="row">

  {{ $servicesDetails->links() }}
</div>

</div>
</div>

@endsection
