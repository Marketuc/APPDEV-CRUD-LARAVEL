<!-- resources/views/tradies/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tradies</title>
</head>
<body>
    <h1>All Tradies</h1>

    <!-- Table to display all tradies -->
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Job</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through all tradies and display their data -->
            @foreach($tradies as $tradie)
                <tr>
                    <td>{{ $tradie->id }}</td>
                    <td>{{ $tradie->firstname }}</td>
                    <td>{{ $tradie->lastname }}</td>
                    <td>{{ $tradie->email }}</td>
                    <td>{{ $tradie->phonenumber }}</td>
                    <td>{{ $tradie->job }}</td>
                    <td>
                        <!-- Edit Button -->
                        <a href="{{ route('tradies.edit', $tradie->id) }}">Edit</a>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('tradies.destroy', $tradie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this tradie?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

