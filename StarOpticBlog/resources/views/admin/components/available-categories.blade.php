
<h3 class="text-center py-5">Dostupne kategorije</h3>

<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kategorija</th>
            <th scope="col">Izmeni</th>
            <th scope="col">Izbriši</th>
        </tr>
        </thead>
        <tbody>
        @if(count($categories)==0)
            <tr>
                <td><strong>Trenutno nema nijedna kreirana kategorija</strong></td></tr>
        @else
        @foreach($categories as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->name}}</td>
                <td><a class="btn btn-info" href="{{route('categories.edit',$c)}}">Izmeni</a></td>
                <td><form action="{{route('categories.destroy',$c)}} " method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Obriši">
                    </form></td>
            </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
