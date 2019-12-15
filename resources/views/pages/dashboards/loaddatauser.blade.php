<head>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>

@foreach($users as $user)
    <tr class="isiauto" id="">
        <td class="col-1">{{$user->id_user}}</td>
        <td class="col-2">{{$user->nama}}</td>
        <td class="col-3">{{$user->email}}</td>
        <td class="col-2">{{$user->password}}</td>
        <td class="col-2">{{$user->authority}}</td>
        <td class="col-3">
            <button id='{{$user->id_user}}' type='button' class='user-show btn btn-primary' data-toggle='modal' data-target='#editModal'>Edit</button>
            <button id='{{$user->id_user}}' type='submit' class='user-delete btn btn-primary'>Delete</button>
        </td>
    </tr>
@endforeach