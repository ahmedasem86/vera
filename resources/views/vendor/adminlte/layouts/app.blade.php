<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
@include('adminlte::layouts.partials.htmlheader')

  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-purple sidebar-mini" style="padding-top:0px;">
    <div class="wrapper">
      @include('adminlte::layouts.partials.mainheader')
      @include('adminlte::layouts.partials.sidebar')



      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        @include('adminlte::layouts.partials.contentheader')


        <!-- Main content -->
        <section class="content">
          @yield('main-content')
          <!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @include('adminlte::layouts.partials.controlsidebar')
      @include('adminlte::layouts.partials.footer')

    </div><!-- ./wrapper -->
    @section('scripts')
        @include('adminlte::layouts.partials.scripts')
    @show

  </body>
</html>
