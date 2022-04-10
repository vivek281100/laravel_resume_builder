@extends('menus.app')
@section('title')
Resume page
@endsection

@section('content')
<div class="resumepage1">
    <div class='erroraleart'>
        @if(session()->has('errors'))
        @foreach($error->all() as $e)
         <div  class='error' role='aleart'>
             <p>{{$e}}</p>
         </div>
        @endforeach
        @endif
    </div>
    <form action="/Resume" method='POST'>
        @csrf
        <input type="text" name='fullname' placeholder='Fullname'>
        <input type='text' name='email' placeholder='Email'>
        <input type="text" name='phone' placeholder='PhoneNumber'>
        <input tpe='text' name='address' placeholder='Address'>
        <input type="submit" value='submit'>
    </form>
    <div>
    </div>
</div>

@endsection?