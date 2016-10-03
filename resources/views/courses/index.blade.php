@extends('app')

@section('content')

    <h1>Courses</h1>

    <form action="/" method="get">
        Search: <input type="text" name="str" value="{{ $str }}">
        <input type="submit" class="btn btn-primary" value="Ok">
    </form>

    @foreach($courses as $course)
        <div class="col-md-3" style="border: 1px solid #cccccc; margin: 10px; min-height: 275px">
            <h3>{{ $course->name }}</h3>
            <p>{{ $course->description }}. <br><br> by {{ $course->author }}</p>
        </div>
    @endforeach

@endsection