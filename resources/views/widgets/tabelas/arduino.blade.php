<table class="table {{ $class }}">
    <thead>
    <tr>
        <th>ID</th>
        <th>Temperatura</th>
        <th>Umidade</th>
        <th>MQa</th>
        <th>Data/Hora</th>
    </tr>
    </thead>
    <tbody>
    @foreach($arduinos as $arduino)
        <tr>
            <td>{{$arduino->id}}</td>
            <td>{{$arduino->temperatura}}</td>
            <td>{{$arduino->umidade}}</td>
            <td>{{$arduino->mqa}}</td>
            <td>{{$arduino->created_at}}</td>
        </tr>
    @endforeach
</table>

{!! $arduinos->render() !!}