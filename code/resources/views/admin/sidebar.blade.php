<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{url('static/imagenes/Isotipo.png')}}" class="img-fluid">
        </div>

        <div class="user">
            <span class="subtitle">Bienvenido: {{ Auth::user()->name }} {{ Auth::user()->lastname }}</span> <br>
            <span class="subtitle">IBM: {{ Auth::user()->ibm }} </span> 
            <div class="salir">
                Salir
                <a href="{{url('/logout')}}" data-toogle="tooltrip" data-placement="top" title="Salir">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="main">
        <ul>

            @if(kvfj(Auth::user()->permissions, 'dashboard'))
                <li>
                    <a href="{{ url('/admin') }}" class="lk-dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'municipalities'))
                <li>
                    <a href="{{ url('admin/municipalities') }}" class="lk-municipalities"><i class="fas fa-globe-americas"></i> Municipios</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'units'))
                <li>
                    <a href="{{ url('admin/units/0') }}" class="lk-units lk-unit_add lk-unit_edit lk-unit_delete"><i class="fas fa-hospital-alt"></i> Unidades</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'diet_requests'))
                <li>
                    <a href="{{ url('/admin/diet_requests/0') }}" class="lk-diet_requests lk-diet_request_add lk-diet_request_view lk-diet_request_delete"><i class="fas fa-file-alt"></i> Solicitud de Dietas</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'services'))
                <li>
                    <a href="{{ url('/admin/services') }}" class="lk-services lk-service_add lk-service_edit lk-service_delete"><i class="fas fa-laptop-medical"></i> Servicios</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'journeys'))
                <li>
                    <a href="{{ url('/admin/journeys') }}" class="lk-journeys lk-journey_add lk-journey_edit lk-journey_delete"><i class="fas fa-clock"></i> Jornadas</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'diets'))
                <li>
                    <a href="{{ url('/admin/diets') }}" class="lk-diets lk-diet_add lk-diet_edit lk-diet_delete"><i class="fas fa-utensils"></i> Dietas</a>
                </li>
            @endif

            <!--@if(kvfj(Auth::user()->permissions, 'reports'))
                <li>
                    <a href="{{ url('/admin/reports') }}" class="lk-reports lk-report_informatica lk-report_user lk-report_bitacora "><i class="fas fa-file-pdf"></i> Reportes</a>
                </li>
            @endif -->

            @if(kvfj(Auth::user()->permissions, 'bitacoras'))
                <li>
                    <a href="{{ url('/admin/bitacoras') }}" class="lk-bitacoras "><i class="fas fa-clipboard-list"></i> Bitacoras</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'user_list'))
                <li>
                    <a href="{{ url('/admin/users/all') }}" class="lk-user_add lk-user_list lk-user_edit lk-user_permissions lk-user_assignments"><i class="fas fa-user-lock"></i> Usuarios</a>
                </li>
            @endif

            @if(kvfj(Auth::user()->permissions, 'user_info'))
                <li>
                    <a href="{{ url('/admin/user/account/info') }}" class="lk-user_add lk-user_list lk-user_edit lk-user_permissions lk-user_assignments lk-user_info lk-user_change_password"><i class="fas fa-id-card"></i> Información de Cuenta</a>
                </li>
            @endif
        </ul>
    </div>

</div>