 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">TBF Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="index.html">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Interface
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Hero Section</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Banner:</h6>
                 <a class="collapse-item" href="{{ route('hero.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('hero.index') }}">View</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#heroSection"
             aria-expanded="true" aria-controls="heroSection">
             <i class="fas fa-fw fa-cog"></i>
             <span>Flight Destination</span>
         </a>
         <div id="heroSection" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Popular Destinations:</h6>
                 <a class="collapse-item" href="{{ route('flight-destination.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('flight-destinations.index') }}">View</a>
             </div>
         </div>
     </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
             aria-expanded="true" aria-controls="collapseUtilities">
             <i class="fas fa-fw fa-wrench"></i>
             <span>Top Things to Do</span>
         </a>
         <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Top things to do:</h6>
                 <a class="collapse-item" href="{{ route('topthingstodo.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('topthingstodo.index') }}">View</a>

             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#exploredestination"
             aria-expanded="true" aria-controls="exploredestination">
             <i class="fas fa-fw fa-cog"></i>
             <span>Explore Destination</span>
         </a>
         <div id="exploredestination" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Destinations:</h6>
                 <a class="collapse-item" href="{{ route('exploredestination.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('exploredestination.index') }}">View</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bestofactivity"
             aria-expanded="true" aria-controls="bestofactivity">
             <i class="fas fa-fw fa-cog"></i>
             <span>Holiday Deals</span>
         </a>
         <div id="bestofactivity" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Activities:</h6>
                 <a class="collapse-item" href="{{ route('bestofactivity.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('bestofactivity.index') }}">View</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clientsay"
             aria-expanded="true" aria-controls="clientsay">
             <i class="fas fa-fw fa-cog"></i>
             <span>Client Says</span>
         </a>
         <div id="clientsay" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Feedback:</h6>
                 <a class="collapse-item" href="{{ route('clientsay.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('clientsay.index') }}">View</a>
             </div>
         </div>
     </li>
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#flightpartner"
             aria-expanded="true" aria-controls="flightpartner">
             <i class="fas fa-fw fa-cog"></i>
             <span>Flight Partner</span>
         </a>
         <div id="flightpartner" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Partners:</h6>
                 <a class="collapse-item" href="{{ route('flightpartner.create') }}">Create</a>
                 <a class="collapse-item" href="{{ route('flightpartner.index') }}">View</a>
             </div>
         </div>
     </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Transactions
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
             aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Customers</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Enquiry:</h6>
                 <a class="collapse-item" href="{{ route('ticketenquiry') }}">Flight Ticket</a>
                 <a class="collapse-item" href="{{ route('cityflightenquiry') }}">Citywise Flight</a>
                 <a class="collapse-item" href="{{ route('holidaydealenquiry') }}">Holiday Deals</a>
                 <a class="collapse-item" href="{{ route('hotelenquiry') }}">Hotels</a>
                 {{-- <div class="collapse-divider"></div> --}}

             </div>
         </div>
     </li>

     {{-- <!-- Nav Item - Charts -->
     <li class="nav-item">
         <a class="nav-link" href="charts.html">
             <i class="fas fa-fw fa-chart-area"></i>
             <span>Charts</span></a>
     </li>

     <!-- Nav Item - Tables -->
     <li class="nav-item">
         <a class="nav-link" href="tables.html">
             <i class="fas fa-fw fa-table"></i>
             <span>Tables</span></a>
     </li> --}}

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>



 </ul>
 <!-- End of Sidebar -->
