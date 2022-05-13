@extends('users.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit User
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('users.update', $user->id) }}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="role">Role</label>                    
                <input type="text" name="role" disabled class="form-control" id="role" value="{{ $user->role }}" aria-describedby="role" >                
            </div>
            <div class="form-group">
                    <label for="name">Name</label>                    
                    <input type="text" name="name" class="form-control" id="name" value="{{ $user->name }}" aria-describedby="name" >                
                </div>
                <div class="form-group">
                    <label for="email">Email</label>                    
                    <input type="text" name="email" class="form-control" id="email" value="{{ $user->email }}" aria-describedby="email" >                
                </div>
                <div class="form-group">
                    <label for="writer">Password</label>                    
                    <input type="password" name="password" placeholder="Password Character 8..." class="form-control"  >                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection