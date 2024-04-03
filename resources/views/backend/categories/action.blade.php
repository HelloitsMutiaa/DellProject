<td>
    <div class="btn-group">
        <a class="btn btn-info btn-sm" href="{{ route('backend.categories.edit', encodeId($category->id)) }}">
            <i class="fas fa-pencil-alt">
            </i>
            Edit
        </a>
        <a class="btn btn-danger btn-sm btn-delete"
            href="{{ route('backend.categories.destroy', encodeId($category->id)) }}">
            <i class="fas fa-trash">
            </i>
            Delete
        </a>
    </div>
</td>
