
@include ('header')
<div id="main-content">
    <h2>All Trashed Records</h2>

    @if(Session::has('success'))
    <div style="border:2px solid white;width:100%;background-color:rgb(142, 208, 142);padding:5px;border-radius:30px;">
        <p>{{Session::get('success')}}</p>
    </div>
        @endif
        @if(Session::has('denger'))
        <div style="border:2px solid white;(204, 90, 14);width:100%;background-color:rgb(214, 107, 13);padding:5px;border-radius:30px;">
            <p>{{Session::get('denger')}}</p>
        </div>
            @endif

    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Class</th>
        <th>Language</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Restore</th>
        <th>Delete</th>
        </thead>
        <tbody>
            @foreach($softDeleteData as $softDeleteData)
            <tr>
                <td>{{$softDeleteData->id}}</td>
                <td>{{$softDeleteData->name}}</td>
                <td>{{$softDeleteData->email}}</td>
                <td>{{$softDeleteData->password}}</td>
                <td>{{$softDeleteData->class}}</td>
                <td>{{$softDeleteData->language}}</td>
                <td>{{$softDeleteData->gender}}</td>
                <td>{{$softDeleteData->phone}}</td>
                <td>{{$softDeleteData->address}}</td>

                <td ><a style="background-color:blue;" href={{route('soft.delete.Student.Restore',$softDeleteData->id)}}  onclick="return confirm('Are you sure ?')">Restore</a></td>
                <td> <a href={{route('soft.delete.Student.Permanent',$softDeleteData->id)}} onclick="return confirm('Are you sure ?')">Delete</a></td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
</div>
</body>
</html>
