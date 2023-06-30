<div class="offcanvas offcanvas-end" tabindex="-1" id="editIndvidualProduction_{{ $individualproductionDataList->id }}" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Edit Indvidual Productionr</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('edit.individual.productions', ['editindividualproductionsdata'=> $individualproductionDataList]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="projectName" class="form-label">Project Name</label>
                <input type="text" class="form-control" id="projectName" name="project" value="{{ old('project', $individualproductionDataList->project) }}">
                @error('project')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="coordinatorName" class="form-label">Co-ordinator Name</label>
                <input type="text" class="form-control" id="coordinatorName" name="pc_name"
                    value="{{ old('pc_name', $individualproductionDataList->pc_name) }}">
                @error('pc_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="leadName" class="form-label">Lead Name</label>
                <input type="text" class="form-control" id="leadName" name="tl_name" value="{{ old('tl_name', $individualproductionDataList->tl_name) }}">
                @error('tl_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="coderName" class="form-label">Coder Name</label>
                <input type="text" class="form-control" id="coderName" name="coder_name"
                    value="{{ old('coder_name', $individualproductionDataList->coder_name) }}">
                @error('coder_name')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="coderId" class="form-label">Coder ID</label>
                <input type="text" class="form-control" id="coderId" name="coder_id" value="{{ old('coder_id', $individualproductionDataList->coder_id) }}">
                @error('coder_id')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="count" class="form-label">Count</label>
                <input type="text" class="form-control" id="count" name="count" value="{{ old('count', $individualproductionDataList->count) }}">
                @error('count')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quality" class="form-label">Quality</label>
                <input type="text" class="form-control" id="quality" name="quality" value="{{ old('quality', $individualproductionDataList->quality) }}">
                @error('quality')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="profileImage" class="form-label">Profile Image</label>
                <input type="file" class="form-control" id="profileImage" name="file_path"
                    value="{{ old('file_path', $individualproductionDataList->file_path) }}" oninput="pic.src=window.URL.createObjectURL(this.files[0])">
                    <img id="pic" class="mt-2" src="{{ asset('uploads/' . $individualproductionDataList->file_path) }}" width="100px"  style="padding:4px"/>
                @error('file_path')
                    <div class="error text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success btn-sm">Update</button>
            </div>
        </form>
    </div>
</div>