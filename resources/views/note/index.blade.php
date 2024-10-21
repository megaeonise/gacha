<x-layout>
   this is index
   <div class="task-container">
    <a href="#" class = "new-task-btn">
        Click to add tasks
    </a>
    <div class="tasks">
        @foreach ($note as $task)
        <div class="task">
            <div class="task-body">
                {{ Str::words($task->Task, 100)}}
            </div>
            <div class="task-buttons">
                <a href="#" class="task-viewbtn">View</a>
                <a href="#" class="task-editbtn">Edit</a>
                <button class="task-delbtn">Delete</button>
            </div>
        </div>
    @endforeach
    </div>
   </div>
</x-layout>
