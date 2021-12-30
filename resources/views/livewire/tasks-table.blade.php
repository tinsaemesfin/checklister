<table class="table " wire:sortable="updateTaskOrder">
    <tbody>
        @foreach ($tasks as $task)

            <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <th scope="row">{{ $task->position }}</th>
                <td>{{ $task->name }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('admin.checklists.tasks.edit', [$checklist,$task]) }}"> Edit </a>
                    <form style="display:inline-block"
                        action="{{ route('admin.checklists.tasks.destroy', [$checklist,$task]) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you Sure?')">Delete</button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>