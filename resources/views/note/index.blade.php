<x-layout>
   this is index
   <div class="task-container">
    <a href="{{route('note.create')}}" class = "new-task-btn">
        Click to add tasks
    </a>
    <div class="tasks">
        @foreach ($note as $task)
        <div class="task">
            <div class="task-start">
                <h3>Start: </h3>
                {{ $task->Start}}
            </div>
            <div class="task-body">
                <h3>Task: </h3>
                {{ Str::words($task->Task, 100)}}
            </div>
            <div class="task-due">
                <h3>Due: </h3>
                {{ $task->Due}}
            </div>
            <div class="task-buttons">
                <a href="{{route('note.create')}}" class="task-viewbtn">View</a>
                <a href="{{route('note.create')}}" class="task-editbtn">Edit</a>
                <button class="task-delbtn">Delete</button>
            </div>
        </div>
    @endforeach
    </div>
   </div>
</x-layout>
