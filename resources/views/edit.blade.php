<form method="POST" action="{{ route('index.update', $task->id)  }}">
    @csrf
    @method('PUT')
    <input type="hidden" name="task_id" value="{{ $task->id }}">
    <label for="title">title:</label>
    <input type="text" name="title" value="{{ $task->title }}" required>

    <label for="description">description</label>
    <input type="text" name="description" value="{{ $task->description }}" required>

    <label for="dueDate">dueDate:</label>
    <input type="date" name="dueDate" required>

    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" value="{{ $task->category_id }}" required>

    <button type="submit">Edit задачу</button>
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

/* Стили для меток (labels) */
label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Стили для полей ввода (input) */
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

/* Стили для кнопки редактирования (button) */
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