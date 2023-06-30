@extends('layouts.main')

@section('content')
    <section>
        <div class="text-end mb-3">
            <button class="btn btn-success btn-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#addIndvidualProduction" aria-controls="offcanvasRight"><i class="fa-solid fa-plus"></i> Add
                Indvidual Productions</button>
        </div>
        @include('individual-productions.offcanvas.add-individual-production')

        <div class="card">
            <div class="card-body">
                @if (Session::has('status'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">S.no</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Co-ordinator Name</th>
                            <th scope="col">Lead Name</th>
                            <th scope="col">Coder Name</th>
                            <th scope="col">Coder ID</th>
                            <th scope="col">Count</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Status</th>
                            <th scope="col">Profile Image</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($individualproductionDataList as $individualproductionDataList)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $individualproductionDataList->project }}</td>
                                <td>{{ $individualproductionDataList->pc_name }}</td>
                                <td>{{ $individualproductionDataList->tl_name }}</td>
                                <td>{{ $individualproductionDataList->coder_name }}</td>
                                <td>{{ $individualproductionDataList->coder_id }}</td>
                                <td>{{ $individualproductionDataList->count }}</td>
                                <td>{{ $individualproductionDataList->quality }}</td>
                                <td>
                                    <span class="badge {{ $individualproductionDataList->status == 'active' ? 'bg-success' : 'bg-danger'  }}">
                                        {{ ucfirst($individualproductionDataList->status) }}
                                    </span>
                                </td>
                                <td>
                                    <img src="{{ asset('uploads/' . $individualproductionDataList->file_path) }}" width="60">
                                </td>
                                <td class="text-center text-nowrap">
                                    <a class="me-3 text-decoration-none" href="{{ route('individual.production.change.status', ['id'=>$individualproductionDataList->id])}}">
                                        @if($individualproductionDataList->status == 'active')
                                        <span class="btn btn-sm btn-warning">
                                            <i class="fa-solid fa-ban"></i>
                                        </span>
                                        @else
                                        <span class="btn btn-sm btn-success">
                                            <i class="fa-solid fa-circle-check"></i>
                                        </span>
                                          @endif
                                        </a>
                                        <span class="btn btn-info btn-sm me-3" data-bs-toggle="offcanvas" data-bs-target="#editIndvidualProduction_{{ $individualproductionDataList->id }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </span>
                                        <a class="btn btn-sm btn-danger me-3" href="{{ route('individual.production.remove', ['individual_production' => $individualproductionDataList])}}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                            </tr>
                            @include('individual-productions.offcanvas.edit-individual-production')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
