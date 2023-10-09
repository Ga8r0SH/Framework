<form method="POST" action="{{ route('index.store') }}">
    @csrf

    <label for="title">title:</label>
    <input type="text" name="title" required>

    <label for="description">description</label>
    <input type="text" name="description" required>

    <label for="dueDate">dueDate:</label>
    <input type="date" name="dueDate" required>

    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" required>

    <button type="submit">Создать задачу</button>
</form>
<style>

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}
</style>