<div class="sidebar ">
    <div class="element1 mt-4">
      <a href="{{route('dashboard')}}"><svg class="dashboardimg ms-3" style="background: currentColor" , color; width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10 3H3V12H10V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M21 3H14V8H21V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M21 12H14V21H21V12Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M10 16H3V21H10V16Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <span class="px-1">Dashboard</span></a>
        @if(Auth::user()->hasRole(['supervisor']))
        <a href="{{ route('getusers') }}"><svg class="ms-3" style="background: white;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
            <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
            <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
            <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
          </svg>
            <span class="px-1">Users</span></a>
    
        @elseif (Auth::user()->hasRole(['quality_agent']))
            <a href="{{ route('quality_leads') }}"><svg class="ms-3" style="background: white;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
                <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
                <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
                <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
              </svg>
                <span class="px-1">Leads</span></a>
        @elseif(Auth::user()->hasRole(['umfrage_agent']))
            <a href="{{ route('leads_umfrage') }}"><svg class="ms-3" style="background: white;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
                <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
                <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
                <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
              </svg>
                <span class="px-1">Leads</span></a>
        @elseif(Auth::user()->hasRole(['call_agent']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" href="{{route('callagentleads')}}">
                <svg class="ms-3" style="background: white;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
                    <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
                  </svg>
                  <span class="px-1">Leads</span></a>
            </a>
        @elseif(Auth::user()->hasRole(['confirmation_agent']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('confirmation_agent_leads')" :active="request()->routeIs('confirmation_agent_leads')">
                    {{ __('Leads') }}
                </x-nav-link>
            </a>
        @endif
    </div>
  </div>

<!---------------------------------------------------- -->
{{-- <div class="sidebar ">
    <div class="element1 mt-4">
        <a href="{{route('dashboard')}}"><svg class="dashboardimg ms-3" style="background: currentColor" , color; width="24"
                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 3H3V12H10V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M21 3H14V8H21V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M21 12H14V21H21V12Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M10 16H3V21H10V16Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="px-1">Dashboard</span></a>


        @if (Auth::user()->hasRole(['quality_agent']))
            <a href="{{ route('quality_leads') }}"><svg class="ms-3" style="background: white;" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
                    <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
                </svg>
                <span class="px-1">Leads</span></a>
        @elseif(Auth::user()->hasRole(['umfrage_agent']))
            <a href="{{ route('createLeadView') }}"><svg class="ms-3" style="background: white;" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="4" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="2" y="13" width="20" height="7" rx="1" fill="#00727A " />
                    <rect x="4" y="6" width="3" height="3" rx="1" fill="white" />
                    <rect x="4" y="15" width="3" height="3" rx="1" fill="white" />
                </svg>
                <span class="px-1">Leads</span></a>
        @elseif(Auth::user()->hasRole(['call_agent']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('callagentleads')" :active="request()->routeIs('callagentleads')">
                    {{ __('Leads') }}
                </x-nav-link>
            </a>
        @elseif(Auth::user()->hasRole(['confirmation_agent']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('confirmation_agent_leads')" :active="request()->routeIs('confirmation_agent_leads')">
                    {{ __('Leads') }}
                </x-nav-link>
            </a>
        @endif

    </div>
</div> --}}
