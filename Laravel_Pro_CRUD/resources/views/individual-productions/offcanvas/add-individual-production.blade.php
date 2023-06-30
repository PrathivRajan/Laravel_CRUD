<div class="offcanvas offcanvas-end" tabindex="-1" id="addIndvidualProduction" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Add Indvidual Production</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('store.individual.productions') }}" method="POST" enctype="multipart/form-data">
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
                <label for="coderName" class="form-label">Coder Name</label>
                <input type="text" class="form-control" id="coderName" name="coder_name"
                    value="{{ old('coder_name') }}">
                @error('coder_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="coderId" class="form-label">Coder ID</label>
                <input type="text" class="form-control" id="coderId" name="coder_id" value="{{ old('coder_id') }}">
                @error('coder_id')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="count" class="form-label">Count</label>
                <input type="text" class="form-control" id="count" name="count" value="{{ old('count') }}">
                @error('count')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quality" class="form-label">Quality</label>
                <input type="text" class="form-control" id="quality" name="quality" value="{{ old('quality') }}">
                @error('quality')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="profileImage" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="profileImage" name="file_path"
                    value="{{ old('file_path') }}">
                @error('file_path')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-sm">Add</button>
            </div>

        </form>
    </div>
</div>
