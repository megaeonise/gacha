<x-app-layout>
    <div class="task-container single-task py-10">
        <h1 class="text-3xl py-4" style='color:grey'><strong>Create new task:</strong></h1>
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
</x-app-layout>
