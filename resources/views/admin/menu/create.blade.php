@extends('admin.layouts.app')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Menu</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('menu.index')}}">Menu List</a></li>
                        <li class="breadcrumb-item active">Menu</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-6">
{{--                    @if(session()->has('messages'))--}}
{{--                        <div class="alert alert-success alert-dismissible show">--}}
{{--                            {{ session()->get('messages') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                        @if (session()->has('messages'))--}}
{{--                            <div class="alert alert-success alert-dismissible fade show">--}}
{{--                                {{ session()->get('messages') }}--}}
{{--                                <button type="button" class="close" data-dismiss="alert">&times;</button>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title"><b>Menu</b></h3>
                        </div>
                        <form action="{{ route('menu.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lang" class="col-sm-3 col-form-label">Languages</label>
                                    <div class="col-sm-6">
                                        <select id="lang" class="form-control {{ $errors->has('lang') ? 'selected' : '' }}" name="lang" required="true">
                                            <option value="">----</option>
                                            @foreach($data['languages'] as $key => $language)
                                                <option value="{{$key}}">{{$language}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" id="title" name="title">
                                        <small class="text-danger">{{ $errors->first('title') }}</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="parent_id" class="col-sm-3 col-form-label">Anchor</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control {{ $errors->has('parent_id') ? 'is-invalid' : '' }}" id="parent_id" name="parent_id">
                                        <small class="text-danger">{{ $errors->first('parent_id') }}</small>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info float-right">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
