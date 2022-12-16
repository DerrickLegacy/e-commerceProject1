@extends('master')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class=" col-sm-4 col-sm-offset-4">
                <h1>ACCOUNT LOGIN</h1>
                <!-- Login Form -->
                <form action="login" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="username@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div>
                        <br>
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
