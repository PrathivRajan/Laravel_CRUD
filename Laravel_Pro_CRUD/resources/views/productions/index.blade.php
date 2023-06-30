@extends('layouts.main')

@section('content')
    <section>
        <div class="text-end mb-3">
            <button class="btn btn-success btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#addProduction"
                aria-controls="offcanvasRight"><i class="fa-solid fa-plus"></i> Add Productions</button>
                @filterSearchableBtn(['viewport' => 'modal'])
        </div>

        @include('productions.offcanvas.add-production')

        <div class="card">
            <div class="card-body">
                @if(Session::has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center"></th>
                            <th scope="col">@filterSortSearchable(['sorting' => true, 'filter' => true, 'field_name' => 'project', 'label_name' => 'Project Name'])</th>
                            <th scope="col">@filterSortSearchable(['sorting' => true, 'filter' => true, 'field_name' => 'pc_name', 'label_name' => 'Co-ordinator Name '])</th>
                            <th scope="col">@filterSortSearchable(['sorting' => true, 'filter' => true, 'field_name' => 'tl_name', 'label_name' => 'Lead Name'])</th>
                            <th scope="col" class="text-center">Productin Topper of the Day</th>
                            <th scope="col" class="text-center">Quality Topper of the Day</th>
                            <th scope="col" class="text-center">@filterSortSearchable(['sorting' => true, 'field_name' => 'status'])</th>
                            <th scope="col">Published at</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productionDataLists as $key => $productionDataList)
                            <tr>
                                <th scope="row" class="text-center">{{ $productionDataLists->firstItem() + $key }}</th>
                                <td>{{ $productionDataList->project }}</td>
                                <td>{{ $productionDataList->pc_name }}</td>
                                <td>{{ $productionDataList->tl_name }}</td>
                                <td class="text-center">{{ $productionDataList->topper_count }}</td>
                                <td class="text-center">{{ $productionDataList->topper_quality }}</td>
                                <td class="text-center">
                                    <span class="badge {{ $productionDataList->status == 'active' ? 'bg-success' : 'bg-danger'  }}">
                                        {{ ucfirst($productionDataList->status) }}
                                    </span>
                                </td>
                                <td>{{ date('Y-m-d', strtotime($productionDataList->published_at)) }}</td>
                                <td class="text-nowrap text-center">
                                    <a class="me-3 text-decoration-none" href="{{ route('production.change.status', ['id'=>$productionDataList->id])}}">
                                        @if($productionDataList->status == 'active')
                                        <span class="btn btn-sm btn-warning">
                                            <i class="fa-solid fa-ban"></i>
                                      </span>
                                           @else
                                          <span class="btn btn-sm btn-success">
                                              <i class="fa-solid fa-circle-check"></i>
                                        </span>
                                        @endif
                                    </a>
                                    <span class="btn btn-info btn-sm me-3" data-bs-toggle="offcanvas" data-bs-target="#editProduction_{{ $productionDataList->id }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </span>
                                    <a class="btn btn-sm btn-danger me-3" href="{{ route('production.remove', ['id'=>$productionDataList->id]) }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @include('productions.offcanvas.edit-production')
                        @endforeach
                    </tbody>
                </table>
                {{ $productionDataLists->links() }}
            </div>
        </div>


    </section>
@endsection
