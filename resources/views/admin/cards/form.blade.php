<div class="row">
    {{-- <div class="col-md-12"> --}}
        <div class="mb-3">
            <label>Title</label>
            <input name="title" value="{{ old('title', $card->title) }}" class="form-control" placeholder="Title"/>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                <img width="100" class="img-thumbnail" src="{{ asset('uploads/'. $card->image)}}">

            </div>

        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <option value="" selected>Select</option>
                    @foreach ($categories as $item)
                        <option {{ ($item->id == $card->category_id) ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    </div>
</div>
</div>
