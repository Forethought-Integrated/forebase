<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" >
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
    <img src="{{asset("/admin-lte/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">Forebase</span>
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
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                       <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->


                        <!-- CRM Master Tab Sidebar Component-->
                        <li class="nav-item has-treeview menu">
                         <a href="#" class="nav-link">
                          <i class="nav-icon fa fa-pie-chart"></i>
                          <p>
                           CRM
                           <i class="right fa fa-angle-left"></i>
                         </p>
                       </a>
                       <ul class="nav-item nav-treeview">
                        <li class="nav-item">
                         <a href="#" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>Leads
                           <i class="right fa fa-angle-left"></i>
                         </p>

                       </a>
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
                </li>
                <li class="nav-item">
                 <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Contacts
                   <i class="right fa fa-angle-left"></i>
                 </p>

               </a>
               <ul class="nav nav-treeview">
                <li class="nav-item">
                 <a href="{{ url('contact/create')}}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Create Contact</p>
                </a>
              </li>
              <li class="nav-item">
               <a href="{{ url('contact')}}" class="nav-link">
                <i class="fa fa-circle-o nav-icon"></i>
                <p>List Contact</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
         <a href="#" class="nav-link">
          <i class="fa fa-circle-o nav-icon"></i>
          <p>Accounts
           <i class="right fa fa-angle-left"></i>
         </p>

       </a>
       <ul class="nav nav-treeview">
        <li class="nav-item">
         <a href="{{ url('account/create')}}" class="nav-link">
          <i class="fa fa-circle-o nav-icon"></i>
          <p>Create Account</p>
        </a>
      </li>
      <li class="nav-item">
       <a href="{{ url('account')}}" class="nav-link">
        <i class="fa fa-circle-o nav-icon"></i>
        <p>List Account</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item">
 <a href="#" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>Opportunities
   <i class="right fa fa-angle-left"></i>
 </p>

</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('opportunity/create')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Create Opportunity</p>
  </a>
</li>
<li class="nav-item">
 <a href="{{ url('opportunity')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Opportunity</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
 <a href="#" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>Customers
   <i class="right fa fa-angle-left"></i>
 </p>

</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('customer/create')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Create Customer</p>
  </a>
</li>
<li class="nav-item">
 <a href="{{ url('customer')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Customer</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
 <a href="#" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>Campaigns
   <i class="right fa fa-angle-left"></i>
 </p>

</a>
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
</li>
</ul>
</li>

<!-- ./CRM Master Tab Sidebar Component-->


<!-- Event Module Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Events
   <i class="right fa fa-angle-left"></i>
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

<!-- ./Event Module Tab Sidebar Component-->

<!-- Tasks Module Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Task
   <i class="right fa fa-angle-left"></i>
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
 <a href="{{ url('task')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Task</p>
</a>
</li>
</ul>
</li>

<!-- ./Task Module Tab Sidebar Component-->



<!-- Social Module -->
<li class="nav-item has-treeview ">
 <a href="{{ url('dashboard')}}" class="nav-link ">
  <i class="nav-icon fa fa-dashboard"></i>
  <p>
   Socials
   <i class="right fa "></i>
 </p>
</a>
</li>
<!-- ./Social Module -->



<!-- Knowledge Center Module Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Knowledge Center
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('knowledgeCenter/dashboard')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Knowledge Dashboard</p>
  </a>
</li>

</ul>
</li>

<!-- ./Knowledge Center Module Tab Sidebar Component-->


<!-- Admin Module Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Admin
   <i class="right fa fa-angle-left"></i>
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
 <a href="{{ url('task')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Task</p>
</a>
</li>
</ul>

<!-- Admin Sub_module Task Module Tab Sidebar Component-->
<ul class="nav nav-treeview">
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Groups
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
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
</li>
</ul>
<!-- ./Admin Sub_module Task Module Tab Sidebar Component-->

<!-- Admin Sub_module User Module Tab Sidebar Component-->
<ul class="nav nav-treeview">
 <li class="nav-item has-treeview ">
   <a href="#" class="nav-link ">
    <i class="nav-icon fa fa-dashboard"></i>
    <p>
     User Blade
     <i class="right fa fa-angle-left"></i>
   </p>
 </a>
 <ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('user/create')}}" class="nav-link active">
    <i class="fa fa-circle-o nav-icon"></i>
    Add New User
  </a>
</li>
<li class="nav-item">
 <a href="{{ url('user')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>View All User</p>
</a>
</li>
</ul>
</li>

</ul>
<!-- ./Admin Sub_module User Module Tab Sidebar Component-->

<ul class="nav nav-treeview">
  <!-- Admin Sub_module Employee Module Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Employee
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('leave/create')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Apply Leave</p>
  </a>
</li>
<li class="nav-item">
 <a href="{{ url('leave')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Leave</p>
</a>
</li>
</ul>
</li>

<!-- ./Admin Sub_module Employee Module Tab Sidebar Component-->

</ul>

<ul class="nav nav-treeview">
  <!-- Admin Sub_module Designation Master Tab Sidebar Component-->
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Designation
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
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
  <p>View Designation</p>
</a>
</li>
</ul>
</li>

<!-- ./Admin Sub_module Designation Master Tab Sidebar Component-->

</ul>

  <!-- Admin Sub_module Group Module Tab Sidebar Component-->
<ul class="nav nav-treeview">
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Groups
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
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
</li>
</ul>
<!-- ./Admin Sub_module Group Module Tab Sidebar Component-->

  <!-- Admin Sub_module Backup Module Tab Sidebar Component-->
<ul class="nav nav-treeview">
<li class="nav-item has-treeview">
 <a href="#" class="nav-link">
  <i class="nav-icon fa fa-pie-chart"></i>
  <p>
   Backup
   <i class="right fa fa-angle-left"></i>
 </p>
</a>
<ul class="nav nav-treeview">
  <li class="nav-item">
   <a href="{{ url('/backup')}}" class="nav-link">
    <i class="fa fa-circle-o nav-icon"></i>
    <p>Backup</p>
  </a>
</li>
<li class="nav-item">
 <a href="{{ url('group')}}" class="nav-link">
  <i class="fa fa-circle-o nav-icon"></i>
  <p>List Group</p>
</a>
</li>
</ul>
</li>


</ul>
<!-- ./Admin Sub_module Backup Module Tab Sidebar Component-->
</li>

<!-- ./Admin Module Tab Sidebar Component-->


</ul>
</nav>
<!-- /.sidebar-menu -->


</div>
<!-- /.sidebar -->
</aside>
