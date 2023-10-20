<div class="sidebar-menu">
    <ul id="accordion-menu">
        <li class="dropdown">
            <a href="{{ url('admin/dashboard') }}" class="dropdown-toggle no-arrow ">
                <span class="micon bi bi-house"></span><span class="mtext">Home</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-textarea-resize"></span><span class="mtext">CMS</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ url('admin/team') }}">Team Management</a></li>


            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-table"></span><span class="mtext">Contact</span>
            </a>
            <ul class="submenu">
                <li><a href="{{url('admin/contact-us')}}">Contact Request</a></li>

            </ul>
        </li>

        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-command"></span><span class="mtext">Testimonial</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ url('admin/testimonial') }}">Testimonial Management</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a href="javascript:;" class="dropdown-toggle">
                <span class="micon bi bi-command"></span><span class="mtext">Gallery</span>
            </a>
            <ul class="submenu">
                <li><a href="{{ url('admin/gallery') }}">Gallery Management</a></li>

            </ul>
        </li>
    </ul>
</div>
