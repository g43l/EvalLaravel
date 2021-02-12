<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<table class="table">
    <thead>
    <tr>
        <th scope="col">#id</th>
        <th scope="col">Nom</th>

        <th scope="col">Message</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>

    </tr>
    </thead>
    <tbody>

    <form action="{{route('createOpinion')}}" method="get">
        @csrf
        <button type="submit">Créer un nouvel avis: </button>
    </form>


    @foreach($opinions as $opinion)
        <tr>
            <th >{{$opinion->id}}</th>
            <td>{{$opinion->name}}</td>
            <td>{{$opinion->message}}</td>
{{--            <td><a href="{{route('updateOpinion', $opinion->id)}}">Modifier</a></td>--}}
            <td>
{{--                <form action="{{route('deleteOpinion', $opinion->id)}}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('delete')--}}
{{--                    <button type="submit">Supprimer</button>--}}
                </form>
            </td>
        </tr>

    @endforeach

    </tbody>
</table>
