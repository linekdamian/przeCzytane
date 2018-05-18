@extends('layouts.app')

@section('content')
   <div class="container display-4 text-center">
       <div class="row">
           Sorry, the page you are looking for could not be found.
       </div>

       <div class="row mt-5 justify-content-center">
           {{ __('Message: ') }}
           {{ $exception->getMessage() }}
       </div>

   </div>
@endsection