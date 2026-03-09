<form action="/students" method="POST">
    @csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
    </div>

    <button type="submit">Submit</button>
</form>