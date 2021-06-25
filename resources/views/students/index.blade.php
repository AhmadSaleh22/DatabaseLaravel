<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- ... -->
</head>

<body>
<div class="container mx-auto">
    <a  href="students/create" class="my-4 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Add Student</a>
    <table class="table-auto">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>

        @foreach($students as $std)
            <tr>
                <td><a href="/students/{{$std -> id}}/edit">{{$std->id}}</a></td>
                <td>{{$std->name}}</td>
                <td>{{$std->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>

<!-- ... -->
</body>
</html>
