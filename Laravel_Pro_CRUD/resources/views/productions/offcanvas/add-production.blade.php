<div class="offcanvas offcanvas-end" tabindex="-1" id="addProduction" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add Production</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('store.productions') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="projectName" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="projectName" name="project" value="{{ old('project') }}">
                @error('project')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="coordinatorName" class="form-label">Co-ordinator Name</label>
                <input type="text" class="form-control" id="coordinatorName" name="pc_name"
                    value="{{ old('pc_name') }}">
                @error('pc_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="leadName" class="form-label">Lead Name</label>
                <input type="text" class="form-control" id="leadName" name="tl_name" value="{{ old('tl_name') }}">
                @error('tl_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="productinTopper" class="form-label">Productin Topper of the Day</label>
                <input type="text" class="form-control" id="productinTopper" name="topper_count"
                    value="{{ old('topper_count') }}">
                @error('topper_count')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qualityTopper" class="form-label">Quality Topper of the Day</label>
                <input type="text" class="form-control" id="qualityTopper" name="topper_quality"
                    value="{{ old('topper_quality') }}">
                @error('topper_quality')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="publishedAt" class="form-label">Published at</label>
                <input type="date" class="form-control" id="publishedAt" name="published_at"
                    value="{{ old('published_at') }}">
                @error('published_at')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
            </div>

        </form>
    </div>
</div>
