<!--sidebar-menu-->
<div id="sidebar"><a href="{{ url('/admin/dashboard') }}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Departments</span></span></a>
      <ul>
        <li><a href="{{ url('/admin/add-department') }}">Add Departments</a></li>
        <li><a href="{{ url('/admin/view-departments') }}">View Department</a></li>
      </ul>
</li>
<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Content Masters</span></span></a>
      <ul>
        <li><a href="{{ url('/admin/content_masters/verify-master') }}">Verify Content Masters</a></li>
        <li><a href="{{ url('/admin/content_masters/view-masters') }}">View Content Masters</a></li>
      </ul>
</li>
   </div>
  
     
    
    
    
   
<!--sidebar-menu-->