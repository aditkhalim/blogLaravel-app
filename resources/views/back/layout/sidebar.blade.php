<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      {{-- <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Blog Sidebar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div> --}}
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 " aria-current="page" href="{{ url('dashboard') }}">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('article') }}">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Articles
            </a>
          </li>
          
          @if (auth()->user()->role == 1)
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('categories') }}">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Categories
            </a>
          </li>
          @endif

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('config') }}">
              <svg class="bi"><use xlink:href="#list"/></svg>
              Config
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="{{ url('users') }}">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Users
            </a>
          </li>

          <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
              Logout
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("sidebarMenu");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      if (current.length > 0) { 
        current[0].className = current[0].className.replace(" active", "");
      }
      this.className += " active";
      });
    }
  </script>
