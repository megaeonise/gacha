<x-app-layout>
    <div class="task-container single-task">
        <h1 class="text-3xl py-4">Edit your task</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="task">
            @csrf
            @method('PUT')
            <textarea name="Start" rows="10" class="task-body" placeholder="Enter the start time for task">{{ $note->Start }}</textarea>
            <textarea name="Task" rows="10" class="task-body" placeholder="Enter your task here">{{ $note->Task }}</textarea>
            <textarea name="Due" rows="10" class="task-body" placeholder="Enter the start time for task">{{ $note->Due }}</textarea>
            <div class="task-buttons">
                <a href="{{ route('note.index') }}" class="task-cancel-button">Cancel</a>
                <button class="task-submit-button">Submit</button>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="task-delete-button">Delete</button>
                </form>
            </div>
        </form>
    </div>
</x-app-layout>
