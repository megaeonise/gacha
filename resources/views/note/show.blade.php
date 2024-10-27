<x-app-layout>
    <div class="task-container single-task">
        <div class="task-header">
            <h1 class="text-3xl py-4">Created at: {{ $note->created_at }}</h1>
            <h1 class="text-3xl py-4">Start: {{ $note->Start }}</h1>
            <h1 class="text-3xl py-4">Due: {{ $note->Due }}</h1>
            <div class="task-buttons">
                <a href="{{ route('note.edit', $note) }}" class="task-edit-button">Edit</a>
                <a href="{{ route('note.index') }}" class="task-cancel-button">Go Back</a>
                <form action="{{ route('note.destroy', $note) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="task-delete-button">Delete</button>
                </form>
            </div>
        </div>
        <div class="task">
            <div class="task-body">
                {{ $note->Task }}
            </div>
        </div>
    </div>
</x-app-layout>
