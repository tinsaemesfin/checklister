<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">
                                    <svg class="nav-icon">
                                        <use
                                            xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                                        </use>
                                    </svg> Dashboard</a></li>
                            @if (auth()->user()->isadmin)

                                <li class="nav-title">{{ __('Manage Checklists') }}</li>
                                @foreach (\App\Models\ChecklistGroup::with('checklists')->get() as $group)

                                    <li class="nav-group"><a class="nav-link nav-group-toggle"
                                            href="{{ route('admin.checklist_groups.edit', $group->id) }}">
                                            <svg class="nav-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                            </svg> {{ $group->name }}</a>
                                        <ul class="nav-group-items">
                                            @foreach ($group->checklists as $checklist)

                                                <li class="nav-item"><a class="nav-link"
                                                        href="{{ route('admin.checklist_groups.checklists.edit', [$group,$checklist]) }}"><span
                                                            class="nav-icon"></span>
                                                        {{ $checklist->name }}</a>
                                                </li>
                                            @endforeach
                                            <li class="nav-item"><a class="nav-link"
                                                href="{{ route('admin.checklist_groups.checklists.create',[$group]) }}">
                                                
                                                <svg class="nav-icon">
                                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                                </svg> {{ __('New Checklist') }}</a>
        
                                        </li>
                                        </ul>
                                    </li>
                                @endforeach
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('admin.checklist_groups.create') }}">
                                        <svg class="nav-icon">
                                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                        </svg> {{ __('New Checklist Group') }}</a>

                                </li>
                                
                            @endif
                            <li class="nav-title">Pages</li>
                                @foreach (\App\Models\Page::all() as $page)
                                <li class="nav-group"><a class="nav-link" href="{{ route('admin.pages.edit',$page) }}">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                    </svg> {{ $page->title }}</a>
                            </li>
                                @endforeach
                            
                            <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                    </svg> {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 840px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 250px; transform: translate3d(0px, 8px, 0px); display: block;"></div>
        </div>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
