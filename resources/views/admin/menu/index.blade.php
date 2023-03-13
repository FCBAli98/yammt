@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Bosh sahifa</a></li>
                        <li class="breadcrumb-item active">Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    @php $selectedLang = '' @endphp
                    <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-bars"></i> Menu</h3>
                        <a href="{{route('menu.create')}}" class="btn btn-success float-right"><i class="fa fa-plus"></i> Menu Qo'shish</a>

                         <div class="dropdown float-right mr-1">
                             <button class="btn btn-default dropdown-toggle w-100" type="button" data-toggle="dropdown">Tillar <span class="caret"></span></button>
                             <ul class="dropdown-menu">
                                 @foreach($data['languages'] as $lang => $locale)
                                     <li>
                                         <a href="?lang={{$lang}}" class="form-control border-bottom border-top-0 border-left-0 border-right-0" {{$locale['active']?'active':''}}>{{$locale['name']}}</a>
                                     </li>
                                     @if($locale['active'])
                                         @php $selectedLang = $lang  @endphp
                                     @endif
                                 @endforeach
                             </ul>
                         </div>

{{--                        <select name="lang" id="lang" class="float-right form-control mr-3" style="width: 150px;">--}}
{{--                            <option value="">---</option>--}}
{{--                            @foreach($data['languages'] as $lang => $locale)--}}
{{--                                    <option {{request($lang)}}>--}}
{{--                                        <a href="?lang={{$lang}}" class="btn btn-default float-right" {{$locale['active']?'active':''}}>{{$locale['name']}}</a>--}}
{{--                                    </option>--}}
{{--                                    @if($locale['active'])--}}
{{--                                        @php $selectedLang = $lang  @endphp--}}
{{--                                    @endif--}}
{{--                            @endforeach--}}
{{--                        </select>--}}

                        <form action="" id="searchForm" method="get">
                            <input type="hidden" name="lang" value="{{$selectedLang}}">
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Title</th>
{{--                                <th class="text-center">Translations</th>--}}
                                <th class="text-center">Created</th>
                                <th class="text-center">Updated</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            <form action="">
                                <button type="submit" class="d-none"></button>
                                <tr>
                                    <th></th>
                                    <th><input type="text" name="name_uz" value="{{ request('title') }}" class="form-control form-control-sm"></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </form>
                            </thead>
                            <tbody>
                            @if($data['models'])
                                @forelse($data['models'] as $key => $item)
                                    <tr>
                                        <td class="text-center">{{$key + 1}}</td>
{{--                                        <td class="text-center">{{ $data['models']->currentPage() }}</td>--}}
                                        <td class="text-center"><a href="#">{{$item->title}}</a></td>
{{--                                        <td class="text-center">--}}
{{--                                            <div class="nowrap">--}}
{{--                                                @foreach($item->langsCheck as $lang => $locale)--}}
{{--                                                    @if(isset($locale['exists']))--}}
{{--                                                        <a href="#" class="btn btn-success btn-xs"><i class="fa fa-check"></i> {{$locale['name']}}</a>--}}
{{--                                                    @else--}}
{{--                                                        <a href="{{route('menu.edit', $item->id)}}?lang={{$lang}}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> {{$locale['name']}}</a>--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
                                        </td>
                                        <td class="text-center">{{$item->created_at}}</td>
                                        <td class="text-center">{{$item->updated_at}}</td>
                                        <td class="text-center">
                                            <a href="{{route('menu.edit',$item->id)}}" class="btn btn-default btn-sm"><span class="fa fa-plus"></span></a>
                                            <a href="#" class="btn btn-default btn-sm"><span class="fa fa-edit"></span></a>
                                            <form action="{{ route('menu.destroy', $item->id) }}" method="post">
                                                <input class="btn btn-default" type="hidden" value="Delete" />
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                            <a class="btn btn-default btn-sm"><span class="fa fa-trash-alt"></span></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">
                                            <div class="alert alert-default-warning">
                                                Ma'lumot mavjud emas
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            @endif
                            </tbody>
                        </table>
                        <div class="card-footer clearfix">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dataTables_info"  role="status" aria-live="polite">
{{--                                        Qatorlar({{ $item->firstItem() }}-{{ $item->lastItem() }}) | Jami:{{ $item->total() }} ta--}}
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
{{--                                        {{ $item->links('vendor.pagination.bootstrap-4') }}--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
    </script>
@endpush
