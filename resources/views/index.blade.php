<div class="grid">
    @foreach($tasks as $task)
        <div class="task-container">
            <div class="task-content">
                <h2 class="task-title">{{ $task->title }}</h2>
                <p class="task-description">{{ $task->description }}</p>
                <a class="task-link" href="{{ route("index.show", $task->id) }}">Перейти</a>
            </div>
        </div>
    @endforeach
</div>

<div>
    <a href="{{ route("index.create") }}" class="create-button">Создать</a>
</div>

<div class="pagination">
    {{ $tasks->links() }}
</div>
<style>

        .grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
    margin-top: 2rem;
    margin-bottom: 2rem;
}

/* Стили для отдельной задачи */
.task-container {
    background: linear-gradient(to bottom, #ffffff, #f3f3f3);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 1rem;
}

/* Стили для содержимого задачи */
.task-content {
    text-align: center;
}

/* Стили для заголовка задачи */
.task-title {
    font-weight: bold;
    font-size: 1.5rem;
    color: #333333;
}

/* Стили для описания задачи */
.task-description {
    font-size: 1rem;
    color: #666666;
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
}

/* Стили для ссылки "Перейти" */
.task-link {
    color: #0077cc;
    text-decoration: none;
}

.task-link:hover {
    text-decoration: underline;
}

/* Стили для контейнера пагинации */
.pagination {
    margin-top: 2rem;
    text-align: center;
}

/* Стили для кнопок пагинации */
.pagination ul.pagination {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
}

.pagination li.page-item {
    margin: 0 0.25rem;
}

/* Стили для кнопки "Создать" */
.create-button-container {
    text-align: center;
    margin-top: 1rem;
}

.create-button {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: linear-gradient(to right, #4a90e2, #ff6b6b);
    color: #ffffff;
    border-radius: 8px;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.create-button:hover {
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}
</style>