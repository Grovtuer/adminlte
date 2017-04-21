<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional)--> 
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif 
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('message.menu') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="#"><i class='fa fa-folder-open-o'></i> <span>{{ trans('message.ventas') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.cartera') }}</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-user"></i><span>{{ trans('message.empleados') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.lista') }}</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.prestamos') }}</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"> <i class="fa fa-bar-chart-o"></i> <span>{{ trans('message.reportes') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.nomina') }}</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.informe') }}</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> {{ trans('message.grupo') }}</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-align-justify"></i><span>{{ trans('message.catalogos') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="catalogos/comision"><i class="fa fa-circle-o"></i> {{ trans('message.comision') }}</a></li>
                    <li><a href="catalogos/sede"><i class="fa fa-circle-o"></i> {{ trans('message.sede') }}</a></li>
                    <li><a href="catalogos/sueldobase"><i class="fa fa-circle-o"></i> {{ trans('message.sueldo') }}</a></li>
                    <li><a href="catalogos/extra"><i class="fa fa-circle-o"></i> {{ trans('message.extra') }}</a></li>
                    <li><a href="catalogos/puestos"><i class="fa fa-circle-o"></i> {{ trans('message.puestos') }}</a></li>
                    <li><a href="catalogos/material"><i class="fa fa-circle-o"></i> {{ trans('message.material') }}</a></li>
                    <li><a href="catalogos/mercado"><i class="fa fa-circle-o"></i> {{ trans('message.mercado') }}</a></li>
                    <li><a href="catalogos/estatus"><i class="fa fa-circle-o"></i> {{ trans('message.status') }}</a></li>
                    <li><a href="catalogos/peticion"><i class="fa fa-circle-o"></i> {{ trans('message.peticion') }}</a></li>
                    <li><a href="catalogos/equipo"><i class="fa fa-circle-o"></i> {{ trans('message.equipo') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
