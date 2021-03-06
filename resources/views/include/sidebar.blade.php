<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           {{-- <img src="{{asset("/img/default_images/vikram.jpeg")}}" class="img-circle" alt="User Image"> --}}
           <img src="{{url("/storage/uploads/avatar/".Auth::user()->avatar)}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <a href="{{ asset('users'.'/'.Auth::user()->id)}}">
            <p><strong>{{Auth::user()->name}}</strong></p>
          </a>
          <a href="{{ asset('users'.'/'.Auth::user()->id)}}  "><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      {{-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> --}}
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        {{-- <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> --}}


        {{-- Admin --}}
        @can('Administration')
        <li>
          <a href="{{ asset('/administration') }}">
            <img src="{{asset("/img/sidebar/Admin.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Admin</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan

        {{-- ./Admin --}}

         {{-- Brand --}}
        @can('Brand')
        <li>
          <a href="{{ asset('/marketing') }}">
            <img src="{{asset("/img/sidebar/Brand.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Brand</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan
        {{-- ./Brand --}}

        {{-- CRM --}}
        @can('CRM')
        <li>
          <a href="{{ asset('/crm') }}">
            <img src="{{asset("/img/sidebar/CRM.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>CRM</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan
        {{-- ./CRM --}}


        {{-- File Manager --}}
        @can('FileManager')
        <li>
          <a href="{{ asset('/knowledge') }}">
            <img src="{{asset("/img/sidebar/File.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 30px">
            <i class="fa "></i> <span>Files </span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan
        {{-- ./File Manager --}}

        {{-- File Tag Manager --}}
        @can('file-tag-manager')
        <li>
          <a href="{{ asset('/file-tag-manager') }}">
            <img src="{{asset("/img/sidebar/fmngr.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3" style=" width: 30px">
            <i class="fa "></i> <span>File Manager</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        @endcan
        {{-- ./File Tag Manager --}}

        {{--/.Helpdesk--}}

         @can('Helpdesk')
        <li>
          <a href="{{ asset('/Helpdesk') }}">
            <img src="{{asset("/img/sidebar/Helpdesk.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Helpdesk</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan
        {{--/.Helpdesk--}}


        {{-- Social --}}
        @can('SocialPost')
        <li>
          <a href="{{ asset('/social') }}">
             <img src="{{asset("/img/sidebar/Social.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 30px">
            <i class="fa "></i> <span>MasComm</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        @endcan
        {{-- ./social --}}

        

       


        

        {{-- HelpDesk --}}
        {{--<li>
          <a href="/under-construction">
            <img src="{{asset("/img/sidebar/Help_Desk.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Marketing Desk</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>--}}
        {{-- ./HelpDesk --}}

       


        

        {{-- Back --}}
                          {{-- old helpdesk --}}
       {{--  <li>
          <a href="/helpdesk">
            <img src="{{asset("/img/sidebar/administration.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Helpdesk</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>--}}
         {{-- end of old helpdesk --}}
       
        {{-- ./Back --}}


        {{-- Notification --}}
        <li>
          <a href="{{ asset('/notification') }}">
            <img src="{{asset("/img/sidebar/Notification.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Notification</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>
        {{-- ./Notification --}}

        {{--Task start--}}

         <li>
          <a href="{{ asset('/crm/task') }}">
            <img src="{{asset("/img/sidebar/Task.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Task</span>
            <span class="pull-right-container">
              {{-- <small class="label pull-right bg-green">new</small> --}}
            </span>
          </a>
        </li>

        {{--Task-End--}}







       {{--  <li>
          <a href="/brands">
            <img src="{{asset("/img/sidebar/Permission_&_role.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 30px">
            <i class="fa "></i> <span>Brand</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li> --}}



{{--
        <li>
          <a href="#">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level One
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i> Level Two
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-book"></i>
         <span>Documentation</span></a></li> --}}

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>