 @extends('layouts.app')

@section('content')
    <div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Admin Dashboard</h1>
          <p>This is your awesome dashboard you can manage...</p>
        </div>
            <div class="ulist">
              <h1>Users List </h1>
            </div>
          <div class="col-md-12">
            <div class="row">
                @foreach($users as $user)
                    <div class="col-md-4 userlist">
                    <form action="{{route('users.update', $user->id)}}" method="post">
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <input class="form-control" value="{{ $user->name }}" disabled>
                        </div>

                        <div class="form-group">
                            <select name="role_id" class="form-control">
                                <option selected>{{ $user->role->name }}</option>
                                <option value="2">Author</option>
                                <option value="3">Subscriber</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input class="form-control" value="{{ $user->email }}" disabled>
                        </div>

                        <div class="form-group">
                            <input class="form-control" value="{{ $user->created_at->diffForHumans() }}" disabled>
                        </div>
                        <button class="btn btn-primary btn-xs pull-left col-md-12">Update</button>
                        {{ csrf_field() }}
                    </form>
                    <form action="{{ route('users.delete', $user) }}" method="post">
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger btn-xs pull-right col-md-12 mt-1">Delete</button>
                        {{ csrf_field() }}
                    </form>

                  <div class="clearfix"> </div>
                </div>
                
                @endforeach

            </div>

        </div>
     </div>
     </div> <!-- col-md-9 clossing  -->
        <div class="col-md-3 bann-left">
        @include('layouts.side-bar')
        </div>

 
@endsection
