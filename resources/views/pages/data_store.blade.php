    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Message</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data  as $student)
    <tr> 
      <th scope="row">1</th>
      <td>{{ $student->name}}</td>
      <td>{{ $student->email}}</td>
      <td>{{ $student->phone}}</td>
      <td>{{ $student->address}}</td>
      <td>{{ $student->message}}</td>
        <td>
     <a href="{{route('user.edit',$student->id)}}" class="btn bg-success">Edit</a>


        </td>
    </tr>
     @endforeach
  </tbody>
</table>