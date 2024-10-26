<x-layout>
    <div class="task-container single-task">
        <h1 class="text-3xl py-4">Edit your task</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="task">
            @csrf
            @method('PUT')
            <textarea name="task" rows="10" class="task-body" placeholder="Enter the start time for task">{{ $note->Start }}</textarea>
            <textarea name="task" rows="10" class="task-body" placeholder="Enter your task here">{{ $note->Task }}</textarea>
            <textarea name="task" rows="10" class="task-body" placeholder="Enter the start time for task">{{ $note->Due }}</textarea>
            <div class="task-buttons">
                <a href="{{ route('note.index') }}" class="task-cancel-button">Cancel</a>
                <button class="task-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-layout>
