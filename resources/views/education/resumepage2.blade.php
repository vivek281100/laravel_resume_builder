@extends('menus.app')
@section('title')
Resume page
@endsection

@section('content')
<div class="resumepage2">
    <div class='erroraleart'>
        @if(session()->has('errors'))
        @foreach($error->all() as $e)
         <div  class='error' role='aleart'>
             <p>{{$e}}</p>
         </div>
        @endforeach
        @endif
    </div>
    <form action="/education" method='POST'>
        @csrf
        <input type="text" name='schoolName' placeholder='schoolName'>
        <input type='text' name='schoolLocation' placeholder='schoolLocation'>
        <input type="text" name='degree' placeholder='degree'>
        <input tpe='text' name='fieldOfStudy' placeholder='fieldOfStudy'>
        <input tpe='text' name='graduationStartDate' placeholder='graduationStartDate'>
        <input tpe='text' name='graduationEndDate' placeholder='graduationEndDate'>
        <input type="submit" value='Save Details'>
    </form>
    <div>
    </div>
</div>

@endsection?