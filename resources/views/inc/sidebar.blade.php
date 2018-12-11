<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" >
  <!-- Brand Logo -->
  <a href="/dashboard" class="brand-link">
    <img src="{{asset("/admin-lte/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Tingg</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <a href="{{ url('user'.'/'.Auth::user()->id)}}">
        <div class="image">
          {{-- <img src="{{asset("/admin-lte/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image"> --}}
          <img src="/uploads/avatar/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image" style="width:50px; height:50px; floaat:left; border-radius:50%; margin-right:25px;" >
          
        </div>
      </a>
      <div class="info">
        <a href="{{ url('user'.'/'.Auth::user()->id)}}" class="d-block">{{ Auth::user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      {{-- SideBar List Start  --}}
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        {{-- CRM Module Tab --}}
        <li class="nav-item has-treeview" style="font-size: 13px;">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
            <img src="{{asset("/img/Admin/sidebar/icon/crm3.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp;  
            <p>
              CRM
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
            {{-- Leads Module --}}
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Leads
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Leads Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('lead/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Lead</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('lead')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Lead</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Lead Module --}}

            </li>
            {{-- ./Leads Module --}}

            {{-- Contacts Module --}}
            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Contacts
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Contacts Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('contact/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Contacts</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('contact')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Contacts</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Contacts Module --}}

            </li>
            {{-- ./Contacts Module --}}

            {{-- Accounts Module --}}
            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Accounts
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Accounts Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('account/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Accounts</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('account')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Accounts</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Accounts Module --}}

            </li>
            {{-- ./Accounts Module --}}

            {{-- Opportunities Module --}}
            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Opportunities
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Opportunities Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('opportunity/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Opportunities</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('opportunity')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Opportunities</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Opportunities Module --}}

            </li>
            {{-- ./Opportunities Module --}}


            {{-- Customers Module --}}

            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Customers
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Customers Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('customer/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Customers</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('customer')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Customers</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Customers Module --}}

            </li>
            {{-- ./Customers Module --}}

            {{-- Campaigns Module --}}

            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Campaigns
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Campaigns Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('campaign/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Campaigns</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('campaign')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Campaigns</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Campaigns Module --}}

            </li>
            {{-- ./Campaigns Module --}}

            
            
          </ul>
        </li>

        {{-- ./CRM Module Tab --}}

        {{-- Events Module Tab --}}
        <li class="nav-item has-treeview" style="font-size: 13px;">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             <img src="{{asset("/img/Admin/sidebar/icon/event.gif")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 33px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Events
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/event/create')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('event')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>List Event</p>
              </a>
            </li>

          </ul>
        </li>

        {{-- Events Module Tab --}}

        {{-- Task Module Tab --}}
        <li class="nav-item has-treeview" style="font-size: 13px;">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             <img src="{{asset("/img/Admin/sidebar/icon/task2.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Task
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('/task/create')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>Create Task</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('task')}}"  class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>List Task</p>
              </a>
            </li>

          </ul>
        </li>

        {{-- Task Module Tab --}}

         {{-- Admin Module Tab --}}
        <li class="nav-item has-treeview" style="font-size: 13px;">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
            <img src="{{asset("/img/Admin/sidebar/icon/a2.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style=" width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp;  
            <p>
              Admin
              <i class="fa fa-angle-left right"></i>
            </p>
          </a>
            {{-- Groups Module --}}
          <ul class="nav nav-treeview">
            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Groups
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Groups Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/group/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Group</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('group')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Group</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Lead Module --}}

            </li>
            {{-- ./Leads Module --}}

            {{-- Designation Module --}}
            <li class="nav-item" style="font-size: 13px;">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Designation
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Contacts Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('/designation/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Designation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('designation')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Designation</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Designation Module --}}

            </li>
            {{-- ./Designation Module --}}

            {{-- Employee Module --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Employee
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Employee Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('leave/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Leave</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('leave')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List Leave</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Employee Module --}}

            </li>
            {{-- ./Employee Module --}}

            {{-- Backup Module --}}
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  Backup
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Opportunities Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('opportunity/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Create Backup</p>
                  </a>
                </li>
                
              </ul>
              {{-- ./Nested Opportunities Module --}}

            </li>
            {{-- ./Opportunities Module --}}


            

            {{-- ./Admin Module --}}

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>
                  User
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>

              {{-- Nested Campaigns Module --}}
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ url('user/create')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>Add User</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url('user')}}" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>List User</p>
                  </a>
                </li>
              </ul>
              {{-- ./Nested Campaigns Module --}}

            </li>
            {{-- ./Campaigns Module --}}

            
            
          </ul>
        </li>

        {{-- CRM Module Tab --}}

        {{-- Socials Module Tab --}}
        {{-- <li class="nav-item " style="font-size: 13px;">
          <a href="{{ url('dashboard')}}" class="nav-link"> --}}
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             {{-- <img src="{{asset("/img/Admin/sidebar/icon/ocial2.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Socials
            </p>
          </a>

        </li> --}}

        {{-- ./Socials Module Tab --}}

        {{-- Socials Module Tab --}}
        <li class="nav-item " style="font-size: 13px;">
          <a href="{{ url('social')}}" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             <img src="{{asset("/img/Admin/sidebar/icon/social2.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Socials
            </p>
          </a>

        </li>

        {{-- ./Socials Module Tab --}}

        {{-- Knowledge Center Module Tab --}}
        <li class="nav-item " style="font-size: 13px;">
          <a href="{{ url('knowledgecenter')}}" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             <img src="{{asset("/img/Admin/sidebar/icon/knowledgecenter3.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Knowledge Center
            </p>
          </a>

        </li>

        {{-- ./Knowledge Center Module Tab --}}

        {{-- Knowledge Center Module Tab --}}
        <li class="nav-item " style="font-size: 13px;">
          <a href="/apps" class="nav-link">
            <!-- <i class="nav-icon fa fa-tree"></i> -->
             <img src="{{asset("/img/Admin/sidebar/icon/apps.png")}}" alt="AdminLTE Logo" class=" img-circle elevation-3"
    style="width: 35px"> &nbsp;&nbsp;&nbsp;&nbsp; 
            <p>
              Apps
            </p>
          </a>

        </li>

        {{-- ./Knowledge Center Module Tab --}}


      </ul>
      {{-- ./SideBar List END --}}
    </nav>
    <!-- /.sidebar-menu -->


  </div>
  <!-- /.sidebar -->
</aside>
