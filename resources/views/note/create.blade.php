<x-layout>
    <div class="task-container single-task">
        <h1>Create new task</h1>
        <form action="{{ route('note.store') }}" method="POST" class="task">
            @csrf
            <textarea name="Start" rows="10" class="task-body" placeholder="Enter your task here"></textarea>
            <br>
            <textarea name="Task" rows="10" class="task-body" placeholder="Enter your task here"></textarea>
            <br>
            <textarea name="Due" rows="10" class="task-body" placeholder="Enter your task here"></textarea>
            <div class="task-buttons">
                <a href="{{ route('note.index') }}" class="task-cancel-button">Cancel</a>
                <button class="task-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
