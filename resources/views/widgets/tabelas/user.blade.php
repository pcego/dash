<table class="table {{ $class }}">
    <thead>
        <tr>
            <th><center>ID</center></th>
            <th><center>Name</center></th>
            <th><center>E-Mail</center></th>
            <th><center>Excluir</center></th>
            <th><center>Alterar</center></th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td><center>{{$user->id}}</center></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><center><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button></center> </td>
            <td><center><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-wrench"></i></button></center> </td>
        </tr>
    @endforeach
</table>

{!! $users->render() !!}