@extends ('layouts.master')
@section  ('content')
    <div class="col-sm-8 blog-main">
        <h1>Register</h1>
    
        <hr>
        
        <form method="POST" action="register">
        {{csrf_field() }}
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
    
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required class="form-control">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
            </div>
            @include('layouts.error')
        </form>
    </div>

@endsection