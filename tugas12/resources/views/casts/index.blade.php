@extends("layout.master")

@section("tite")
    casts
@endsection

@section("content")
<table class="table">
    <a href="/casts/create" class="btn btn-sm btn-primary">create casts</a>
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">nama</th>
        <th scope="col">umur</th>
        <th scope="col">bio</th>
        <th scope="col" class="d-flex d-inline">action</th>

      </tr>
    </thead>
    <tbody>
        @forelse  ($casts as $key =>$item)
      <tr>
        <td scope="row">{{$key + 1}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>{{$item->bio}}</td>

        <td class="d-flex d-inline">
            <a href="/casts/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
            <a href="/casts/{{$item->id}}/edit" class="btn btn-info btn-sm">edit</a>
            <form action="/casts/{{$item->id}}" method="POST">
                @csrf 
                @method("delete")
                <input type="submit" class ="btn btn-danger btn-sm" value="delete">
            </form>
        <td>
      </tr>
      @empty
       cast belum ada
       @endforelse

    </tbody>
  </table>

@endsection