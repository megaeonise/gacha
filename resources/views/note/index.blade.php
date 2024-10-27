<x-app-layout>
   <div class="task-container py-10">
    <p style='color:grey'>this is index</p>
    <a href="{{route('note.create')}}" class = "new-task-btn">
        Click to add tasks
    </a>
    <div class="tasks">
        @foreach ($note as $task)
        <div class="task">
            <div class="task-body">
                <h3><b>Start: </b></h3>
                {{ $task->Start}}
            </div>
            <div class="task-body">
                <h3><b>Task:</b> </h3>
                {{ Str::words($task->Task, 100)}}
            </div>
            <div class="task-body">
                <h3><b>Due: </b></h3>
                {{ $task->Due}}
            </div>
            <div class="task-buttons">
                <a href="{{route('note.show', $task)}}" class="task-view-button">View</a>
                <a href="{{route('note.edit', $task)}}" class="task-edit-button">Edit</a>
                <form action="{{ route('note.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="task-delete-button">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div class="py-5">
    {{ $note->links() }}
   </div>
</x-app-layout>
