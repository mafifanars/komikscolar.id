{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<div class="container">
    <h1>Daftar Pengguna</h1>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td> 
                        <a href="/user/{{ $user->id }}">{{ $user->name }}</a>
                    </td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }} <!-- Menampilkan link paginasi -->

</div>
{{-- @endsection --}}
