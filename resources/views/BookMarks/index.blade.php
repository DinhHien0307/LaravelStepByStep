@extends ('layouts.master')
@section ('content')
<div class="col-sm-8 blog-main">
    
<form method="POST" action="bookmark/save">
    {{csrf_field() }}
        <div class="form-group">
            <label for="Title">URL:</label>
            <input type="text" class="form-control" id="url" name="url">
 
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
    <hr
    <ul>
        <h2>List of BookMarks:</h2>
        @if (count($bookmarks)==0)
        <div>
        There is no BookMark.
        </div>
        @endif
        @foreach ($bookmarks as $bookmark)
        <li><a href="bookmark/{{$bookmark->id}}">{{$bookmark->url}}</a></li>
        @endforeach
    </ul>
</div>

@endsection