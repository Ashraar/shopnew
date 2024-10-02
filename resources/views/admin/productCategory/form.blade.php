<!-- resources/views/admin/productCategory/form.blade.php -->
<x-admin-layout>
    @section('content')
        <h1>{{ isset($category->id) ? 'Edit' : 'Create' }} Product Category</h1>

        <form action="{{ isset($category->id) ? route('product-category.update', $category->id) : route('product-category.store') }}" method="POST" enctype="multipart/form-data" class="category-form">
            @csrf
            @if(isset($category->id))
                @method('PUT')
            @endif

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" class="form-control" placeholder="Enter Category Name" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" class="form-control" placeholder="Enter Category Slug" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Enter Category Description">{{ old('description', $category->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="parent_id">Parent Category</label>
                <select id="parent_id" name="parent_id" class="form-control">
                    <option value="">None</option>
                    @foreach($categories as $parentCategory)
                        <option value="{{ $parentCategory->id }}" {{ old('parent_id', $category->parent_id) == $parentCategory->id ? 'selected' : '' }}>
                            {{ $parentCategory->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" id="status" name="status" {{ old('status', $category->status) ? 'checked' : '' }}>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($category->id) ? 'Update' : 'Create' }}</button>
        </form>
    @endsection
</x-admin-layout>

<style>
    .category-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        color: #fff;
        background-color: #007bff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }
</style>
