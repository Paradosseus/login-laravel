@include('partials.header')
<x-nav/>

<a href="/addUser"><button>Add User</button></a>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Last Name</th>
            <th scope="col">First Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            @if(Session::has('success'))
            {{session::get('success')}}
            <script>
            alert('Deleted');
            </script>
            @endif
            @foreach($customers as $customer)
            <tr>
            <td>{{$customer -> id}}</td>
            <td>{{$customer -> lastName}}</td>
            <td>{{$customer -> firstName}}</td>
            <td>{{$customer -> email}}</td>
            <td>{{$customer -> address}}</td>
            <td><button type="button" class="btn btn-primary">Edit</button></td >
            <td><a href="/delete/{{$customer ->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
    </tbody>
    </table>
@include('partials.footer')