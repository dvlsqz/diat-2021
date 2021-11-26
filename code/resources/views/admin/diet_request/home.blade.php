@extends('admin.master')
@section('title','Solicitud de Dietas')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/diet_requests') }}" class="nav-link"><i class="fas fa-file-alt"></i> Solicitudes de Dietas</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="panel shadow">

        <div class="header">
                <h2 class="title"><i class="fas fa-file-alt"></i> Solicitudes de Dietas</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-chevron-down"></i> Filtar</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/admin/diet_requests/0')}}"><i class="fas fa-stopwatch"></i> Activas</a></li>
                            <li><a href="{{url('/admin/diet_requests/1')}}"><i class="fas fa-check-circle"></i> Servidas</a></li>
                            <li><a href="{{url('/admin/diet_requests/trash')}}"><i class="fas fa-trash-alt"></i> Eliminadas</a></li>
                            <li><a href="{{url('/admin/diet_requests/all')}}"><i class="fas fa-boxes"></i> Todas</a></li>
                        </ul>
                    </li>
                    @if(kvfj(Auth::user()->permissions, 'user_add'))
                        <li>
                            <a href="{{ url('/admin/diet_request/add') }}" ><i class="fas fa-plus-circle"></i> Nueva Solicitud</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="inside">
                <table id="table-modules" class="table table-striped table-hover mtop16">
                    <thead>
                        <tr>
                            <td><strong> OPCIONES </strong></td>
                            <td><strong> JORNADA </strong></td>
                            <td><strong> SERVICIO </strong></td>
                            <td><strong> ESTADO </strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($diet_requests as $dr)
                            <tr>
                                <td>
                                    <div class="opts">
                                        @if(kvfj(Auth::user()->permissions, 'user_edit'))
                                            <a href="{{ url('/admin/diet_request/'.$dr->id.'/view') }}" data-toogle="tooltrip" data-placement="top" title="Ver Detalles"><i class="fas fa-eye"></i></a>
                                        @endif
                                        @if(kvfj(Auth::user()->permissions, 'user_edit'))
                                            <a href="{{ url('/admin/diet_request/'.$dr->id.'/pdf') }}" target="_blank" data-toogle="tooltrip" data-placement="top" title="Generar PDF"><i class="fas fa-file-pdf"></i></a>
                                        @endif
                                        @if(kvfj(Auth::user()->permissions, 'user_edit'))
                                            <a href="{{ url('/admin/diet_request/'.$dr->id.'/served') }}" target="_blank" data-toogle="tooltrip" data-placement="top" title="Marcar como Servida"><i class="fas fa-clipboard-check"></i></a>
                                        @endif
                                        @if(kvfj(Auth::user()->permissions, 'user_permissions'))
                                            <a href="{{ url('/admin/diet_request/'.$dr->id.'/delete') }}" data-toogle="tooltrip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $dr->journey->name }}</td>
                                <td>{{ $dr->service->name }}</td>
                                <td>{{ getDietStatusArray(null, $dr->status) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection