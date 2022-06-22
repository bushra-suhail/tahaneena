<div class="row">
    {{-- <div class="col-md-12"> --}}
        <div class="mb-3">
            <label>Name</label>
            <input name="name" value="{{ old('name', $category->name) }}" class="form-control" placeholder="Name"/>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <img width="100" class="img-thumbnail"
                            src="{{ asset('uploads/'.$category->image) }}">

            </div>

        </div>

    </div>
</div>
</div>
