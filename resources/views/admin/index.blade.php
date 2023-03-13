@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
{{--    <div class="content-header">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row mb-2">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <h1 class="m-0">Stati stika</h1>--}}
{{--                </div><!-- /.col -->--}}
{{--                <div class="col-sm-6">--}}
{{--                    <ol class="breadcrumb float-sm-right">--}}
{{--                        <li class="breadcrumb-item"><a href="#">Bosh sahifa</a></li>--}}
{{--                        <li class="breadcrumb-item active">Statistika</li>--}}
{{--                    </ol>--}}
{{--                </div><!-- /.col -->--}}
{{--            </div><!-- /.row -->--}}
{{--        </div><!-- /.container-fluid -->--}}
{{--    </div>--}}
    <!-- /.content-header -->
{{--    @php--}}
{{--        $count = \App\Models\Dashboard::userCounter();--}}
{{--        $countTask = \App\Models\Dashboard::taskCounter();--}}
{{--        $getRole = auth()->user()->roles->pluck('name')->first();--}}
{{--    @endphp--}}
    {{-- Main content--}}
{{--    <div class="content">--}}
{{--        <div class="container-fluid">--}}
{{--            @switch($getRole)--}}
{{--                @case('admin')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['allUser'] }}</h3>--}}
{{--                                <p>Umumiy foydalanuvchilar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-users"></i>--}}
{{--                            </div>--}}

{{--                            <a href="{{ route('user-info.index') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="ribbon-wrapper ribbon-lg">--}}
{{--                                <div class="ribbon bg-danger">--}}
{{--                                    Tez kunda--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="inner">--}}
{{--                                <h3>0</h3>--}}
{{--                                <p>Hozir ilovada</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-mobile-alt"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['womenUser'] }}</h3>--}}

{{--                                <p>Umumiy ayollar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-female"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 2])}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-gradient-blue">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['menUser'] }}</h3>--}}
{{--                                <p>Umumiy erkaklar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-male"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 1]) }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-primary">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['all'] }}</h3>--}}
{{--                                <p>Umumiy vazifalar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-clipboard-list"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-teal">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['print'] }}</h3>--}}
{{--                                <p>Chop etilganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-clipboard-check"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.print') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-gradient-indigo">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['process'] }}</h3>--}}
{{--                                <p>Ko'rib chiqayotganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-search-location"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.process') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['rejected'] }}</h3>--}}

{{--                                <p>Rad etilganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-ban"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.rejected') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}

{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title"><i class="fa fa-chart-pie"></i> Kelib tushgan vazifalar</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>#</th>--}}
{{--                                        <th>F.I.SH</th>--}}
{{--                                        <th>Toifa</th>--}}
{{--                                        <th>Mazmuni</th>--}}
{{--                                        <th>Tel.raqami</th>--}}
{{--                                        <th>Kelgan sanasi</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($tasks as $key => $task)--}}
{{--                                        @if($task->userInfo)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $key+1 }}</td>--}}
{{--                                                <td><a href="{{ route('task.show', $task->id) }}">{{ $task->userInfo->full_name??'' }}</a></td>--}}
{{--                                                <td>{{ $task->category->name_uz??'' }}</td>--}}
{{--                                                <td>{{ $task->additional_info_uz }}</td>--}}
{{--                                                <td>{{ $task->user->phone }}</td>--}}
{{--                                                <td>{{ \Carbon\Carbon::parse($task->created_at)->format('d.m.Y H:i:s')  }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer clearfix">--}}
{{--                                {{ $tasks->links('vendor.pagination.bootstrap-4') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @break--}}

{{--                @case('moderator')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['allUser'] }}</h3>--}}
{{--                                <p>Umumiy foydalanuvchilar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-users"></i>--}}
{{--                            </div>--}}

{{--                            <a href="{{ route('user-info.index') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="ribbon-wrapper ribbon-lg">--}}
{{--                                <div class="ribbon bg-danger">--}}
{{--                                    Tez kunda--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="inner">--}}
{{--                                <h3>0</h3>--}}
{{--                                <p>Hozir ilovada</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-mobile-alt"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['womenUser'] }}</h3>--}}

{{--                                <p>Umumiy ayollar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-female"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 2])}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-gradient-blue">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['menUser'] }}</h3>--}}
{{--                                <p>Umumiy erkaklar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-male"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 1]) }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-primary">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['all'] }}</h3>--}}
{{--                                <p>Umumiy vazifalar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-clipboard-list"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-teal">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['print'] }}</h3>--}}
{{--                                <p>Chop etilganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fas fa-clipboard-check"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.print') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-gradient-indigo">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['process'] }}</h3>--}}
{{--                                <p>Ko'rib chiqayotganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-search-location"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.process') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-danger">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $countTask['rejected'] }}</h3>--}}

{{--                                <p>Rad etilganlar</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-ban"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('task.index.rejected') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="card">--}}

{{--                            <div class="card-header">--}}
{{--                                <h3 class="card-title"><i class="fa fa-chart-pie"></i> Kelib tushgan vazifalar</h3>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-header -->--}}
{{--                            <div class="card-body">--}}
{{--                                <table class="table table-bordered">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th>#</th>--}}
{{--                                        <th>F.I.SH</th>--}}
{{--                                        <th>Toifa</th>--}}
{{--                                        <th>Mazmuni</th>--}}
{{--                                        <th>Tel.raqami</th>--}}
{{--                                        <th>Kelgan sanasi</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($tasks as $key => $task)--}}
{{--                                        @if($task->userInfo)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $key+1 }}</td>--}}
{{--                                                <td><a href="{{ route('task.show', $task->id) }}">{{ $task->userInfo->full_name??'' }}</a></td>--}}
{{--                                                <td>{{ $task->category->name_uz }}</td>--}}
{{--                                                <td>{{ $task->additional_info_uz }}</td>--}}
{{--                                                <td>{{ $task->user->phone }}</td>--}}
{{--                                                <td>{{ \Carbon\Carbon::parse($task->created_at)->format('d.m.Y H:i:s')  }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                            <!-- /.card-body -->--}}
{{--                            <div class="card-footer clearfix">--}}
{{--                                {{ $tasks->links('vendor.pagination.bootstrap-4') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @break--}}

{{--                @case('bkm')--}}
{{--                @break--}}

{{--                @case('republic')--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-info">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['allUser'] }}</h3>--}}
{{--                                <p>Umumiy foydalanuvchilar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-users"></i>--}}
{{--                            </div>--}}

{{--                            <a href="{{ route('user-info.index') }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-success">--}}
{{--                            <div class="ribbon-wrapper ribbon-lg">--}}
{{--                                <div class="ribbon bg-danger">--}}
{{--                                    Tez kunda--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="inner">--}}
{{--                                <h3>0</h3>--}}
{{--                                <p>Hozir ilovada</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-mobile-alt"></i>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-warning">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['womenUser'] }}</h3>--}}

{{--                                <p>Umumiy ayollar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-female"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 2])}}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                    <div class="col-lg-3 col-6">--}}
{{--                        <!-- small box -->--}}
{{--                        <div class="small-box bg-gradient-blue">--}}
{{--                            <div class="inner">--}}
{{--                                <h3>{{ $count['menUser'] }}</h3>--}}
{{--                                <p>Umumiy erkaklar soni</p>--}}
{{--                            </div>--}}
{{--                            <div class="icon">--}}
{{--                                <i class="fa fa-male"></i>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('user-info.index', ['gender' => 1]) }}" class="small-box-footer">Batafsil <i class="fas fa-arrow-circle-right"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- ./col -->--}}
{{--                </div>--}}
{{--                @break--}}

{{--            @endswitch--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

<style>
    .small-box .icon>i.fa, .small-box .icon>i.fab, .small-box .icon>i.fad, .small-box .icon>i.fal, .small-box .icon>i.far, .small-box .icon>i.fas, .small-box .icon>i.ion {
        color: white;
    }
    .small-box .inner h3{
        color: white;
    }
    .small-box .inner p{
        color: white;
    }
    .small-box .small-box-footer{
        color: white !important;
    }

</style>
