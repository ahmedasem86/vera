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
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('message.online') }}</a>
                </div>
            </div>
        @endif
<br>
        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{-- <li class="header">اراضي</li> --}}
            <!-- Optionally, you can add icons to the links -->
            <li class=" treeview">
              <a href="/land"><i class='fa fa-building'></i> <span>اراضي</span>
                <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                  <li><a href="/land">عرض الاراضي</a></li>
                  <li><a href="/land/add">إضافة أرض</a></li>
                  <li class="treeview">
                          <li class="treeview">
                              <a href="#"><i class='fa fa-link'></i> <span>العملاء </span> <i class="fa fa-angle-left pull-left"></i></a>
                              <ul class="treeview-menu">
                                  <li><a href="/clients">عرض العملاء</a></li>
                                  <li><a href="/client/add">إضافة عميل</a></li>
                              </ul>
                          </li>
                  </li>
              </ul>
             </li>
             <li class=" treeview">
               <a href="/partners"><i class='fa fa-link'></i> <span>شركاء النجاح</span>
                 <i class="fa fa-angle-left pull-left"></i></a>
               <ul class="treeview-menu">
                   <li><a href="/partners">عرض شركاء النجاح</a></li>
                   <li><a href="/partners/add">إضافة شريك</a></li>
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
                  <a href="#"><i class='fa fa-link'></i> <span>النظافه</span> <i class="fa fa-angle-left pull-left"></i></a>
                  <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class='fa fa-link'></i> <span>موظفون</span> <i class="fa fa-angle-left pull-left"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="/employee">عرض الموظفون</a></li>
                            <li><a href="/employee/add">إضافة موظف</a></li>
                        </ul>
                    </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>موردون منظفات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/csuppliers">عرض الموردون</a></li>
                              <li><a href="/csupplier/add">إضافة مورد</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>مشتريات منظفات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/cpurchases">عرض المشتريات</a></li>
                              <li><a href="/cpurchase/add">إضافة مشتريات</a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>خامات منظفات</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/cmaterials">سجل الخامات </a></li>
                              <li><a href="/cmaterial/add">إضافة خامة للسجل </a></li>
                          </ul>
                      </li>
                      <li class="treeview">
                          <a href="#"><i class='fa fa-link'></i> <span>تعاقدات النظافه</span> <i class="fa fa-angle-left pull-left"></i></a>
                          <ul class="treeview-menu">
                              <li><a href="/cclients">عرض المتعاقدين</a></li>
                              <li><a href="/cclient/add">إضافة تعاقد</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
            <li class="treeview">
             <a href="#"><i class='fa fa-link'></i> <span>الخزينه</span> <i class="fa fa-angle-left pull-right"></i></a>
             <ul class="treeview-menu">
                 <li><a href="/safe/outcome">مصروفات</a></li>
                 <li><a href="/safe/income">إيرادات</a></li>
             </ul>
         </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
