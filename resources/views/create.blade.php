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