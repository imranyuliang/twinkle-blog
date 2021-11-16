 @extends('layouts.app')

@section('content')
 <div class="team_grid">
        <div class="mt-4 p-5 bg-primary text-white rounded twinkle-jum">
          <h1>Manage Blogs </h1>
          <p>This is your awesome dashboard you can manage...</p>
        </div>


        <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Category ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <th scope="row">{{$category->id}}</th>
          <td>{{$category->name}}</td>
          
          <td><a href="{{route('categories.edit', $category->id )}}">Edit</a> </td>
          
            <td><form method="post" action="{{route('categories.destroy', $category->id)}}">
                 {{ method_field('delete') }}
                     <button type="submit">Delete</button>
                  {{ csrf_field() }}
               </form>
              </td>
        </tr>
        @endforeach
      </tbody>
    </table>
 </div>
@endsection
