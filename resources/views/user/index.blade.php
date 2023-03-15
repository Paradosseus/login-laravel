@include('partials.header')
<x-nav/>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
            <td>{{$user -> id}}</td>
            <td>{{$user -> name}}</td>
            <td>{{$user -> email}}</td>
            <td><button type="button" class="btn btn-primary">Edit</button></td>
            <td><button type="button" class="btn btn-danger"></button></td>
            </tr>
            @endforeach
    </tbody>
    </table>
@include('partials.footer')