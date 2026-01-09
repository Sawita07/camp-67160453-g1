<h1>Pokedex List</h1>
<table class="table">
<thead>
<tr>
<td>ID</td>
<td>Name</td>
<td>Type</td>
<td>HP</td>
<td>Attack</td>
<td>Defense</td>
<td></td>
</tr>
</thead>

@foreach($pokedex as $item)
<tr>
<td>{{ $item->id }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->type }}</td>
<td>{{ $item->hp }}</td>
<td>{{ $item->attack }}</td>
<td>{{ $item->defense }}</td>
<td>
<a class="btn btn-warning" href="{{ url('/pokedexs/'.$item->id.'/edit') }}">แก้ไข</a>

<form style="display:inline"
      action="{{ url('/pokedexs/'.$item->id) }}" method="post">
@csrf
@method('delete')
<button class="btn btn-danger">ลบ</button>
</form>
</td>
</tr>
@endforeach
</table>
