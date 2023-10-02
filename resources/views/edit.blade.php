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