
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tradie</title>
</head>
<body>
    <h1>Edit Tradie</h1>

    <form action="{{ route('tradies.update', $tradie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" value="{{ $tradie->firstname }}" required><br>

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" value="{{ $tradie->lastname }}" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ $tradie->email }}" required><br>

        <label for="phonenumber">Phone Number</label>
        <input type="text" id="phonenumber" name="phonenumber" value="{{ $tradie->phonenumber }}" required><br>

        <label for="job">Job</label>
        <input type="text" id="job" name="job" value="{{ $tradie->job }}" required><br>

        <button type="submit">Update Tradie</button>
    </form>
</body>
</html>
