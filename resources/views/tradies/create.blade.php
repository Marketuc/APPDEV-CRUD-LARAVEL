
<form action="{{ route('tradies.store') }}" method="POST">
    @csrf
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" required>

    <label for="lastname">Last Name</label>
    <input type="text" name="lastname" id="lastname" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="phonenumber">Phone Number</label>
    <input type="text" name="phonenumber" id="phonenumber" required>

    <label for="job">Job</label>
    <input type="text" name="job" id="job" required>

    <button type="submit">Create Tradie</button>
</form>
