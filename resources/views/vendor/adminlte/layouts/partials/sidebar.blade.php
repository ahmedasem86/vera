<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
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

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{-- <li class="header">{{ trans('adminlte_lang::message.land') }}</li> --}}
            <!-- Optionally, you can add icons to the links -->
            <li class=" treeview">
              <a href="/land"><i class='fa fa-building'></i> <span>{{ trans('adminlte_lang::message.land') }}</span>
                <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                  <li><a href="/land">{{ trans('adminlte_lang::message.viewlands') }}</a></li>
                  <li><a href="/land/add">{{ trans('adminlte_lang::message.addland') }}</a></li>
              </ul>
             </li>
             <li class=" treeview">
               <a href="/partners"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::land.partners') }}</span>
                 <i class="fa fa-angle-left pull-left"></i></a>
               <ul class="treeview-menu">
                   <li><a href="/partners">{{ trans('adminlte_lang::land.viewpartners') }}</a></li>
                   <li><a href="/partners/add">{{ trans('adminlte_lang::land.addpartner') }}</a></li>
               </ul>
              </li>
              <li class="treeview">
                  <a href="#"><i class='fa fa-link'></i> <span>تنفيذات المقاولات</span> <i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>مقاولون</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/contractors">عرض المقاولون</a></li>
                              <li><a href="/contractor/add">إضافة مقاول</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>بنود</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/items">عرض البنود</a></li>
                              <li><a href="/item/add">إضافة بند</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>أعمال</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/works">عرض الأعمال</a></li>
                              <li><a href="/work/add">أضافة أعمال</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#"><i class='fa fa-link'></i> <span>توريدات المقاولات</span> <i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>موردون</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/suppliers">عرض الموردون</a></li>
                              <li><a href="/supplier/add">إضافة مورد</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>مشتريات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/purchases">عرض المشتريات</a></li>
                              <li><a href="/purchase/add">إضافة مشتريات</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>خامات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/materials">سجل الخامات </a></li>
                              <li><a href="/material/add">إضافة خامة للسجل </a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <li class="treeview">
                  <a href="#"><i class='fa fa-link'></i> <span>بيع الوحدات </span> <i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>العملاء </span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/clients">عرض العملاء</a></li>
                              <li><a href="/client/add">إضافة عميل</a></li>
                          </ul>
                          <li><a href="/clients">كاش</a></li>
                          <li><a href="/clients">تقسيط</a></li>

                      </li>
                      {{-- <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>مشتريات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/purchases">عرض المشتريات</a></li>
                              <li><a href="/purchase/add">إضافة مشتريات</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>خامات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/materials">سجل الخامات </a></li>
                              <li><a href="/material/add">إضافة خامة للسجل </a></li>
                          </ul>
                      </li> --}}
                  </ul>
              </li>
               <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::cleaning.cleaning') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">مرتبات</a></li>
                    <li><a href="#">العملاء</a></li>
                </ul>
            </li>
            <li class="treeview">
             <a href="#"><i class='fa fa-link'></i> <span>الخزينه</span> <i class="fa fa-angle-left pull-right"></i></a>
             <ul class="treeview-menu">
                 <li><a href="#">مصروفات</a></li>
                 <li><a href="#">ايرادات</a></li>
             </ul>
         </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
