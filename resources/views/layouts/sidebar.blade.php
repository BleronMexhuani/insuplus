<div class="sidebar">
    <div class="element1 mt-4">

        <a href="{{ route('dashboard') }}"
            @if (request()->is('dashboard')) ? style="background-color: #00727A; color:white" : "" @endif>
            @if (request()->is('dashboard'))
                <svg width="24" class="ms-3 height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 3H3V12H10V3Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21 3H14V8H21V3Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21 12H14V21H21V12Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M10 16H3V21H10V16Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            @else
                <svg width="24" class="ms-3 height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 3H3V12H10V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21 3H14V8H21V3Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21 12H14V21H21V12Z" fill="#00727A" stroke="#00727A" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M10 16H3V21H10V16Z" fill="#00727A" stroke="#00727A" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            @endif
            <span class="px-1 sidetext">Dashboard</span>
        </a>

        @if (Auth::user()->hasRole(['supervisor']))
            <a href="{{ route('getusers') }}"
                @if (request()->is('users')) ? style="background-color: #00727A; color:white " : "" @endif>
                @if (request()->is('users'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.7545 13.9999C18.9966 13.9999 20.0034 15.0068 20.0034 16.2488V17.1673C20.0034 17.7406 19.8242 18.2997 19.4908 18.7662C17.9449 20.9294 15.4206 22.0011 12.0004 22.0011C8.5794 22.0011 6.05643 20.9289 4.51427 18.7646C4.18231 18.2987 4.00391 17.7409 4.00391 17.1688V16.2488C4.00391 15.0068 5.01076 13.9999 6.25278 13.9999H17.7545ZM12.0004 2.00464C14.7618 2.00464 17.0004 4.24321 17.0004 7.00464C17.0004 9.76606 14.7618 12.0046 12.0004 12.0046C9.23894 12.0046 7.00036 9.76606 7.00036 7.00464C7.00036 4.24321 9.23894 2.00464 12.0004 2.00464Z"
                            fill="#fff" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.7545 13.9999C18.9966 13.9999 20.0034 15.0068 20.0034 16.2488V17.1673C20.0034 17.7406 19.8242 18.2997 19.4908 18.7662C17.9449 20.9294 15.4206 22.0011 12.0004 22.0011C8.5794 22.0011 6.05643 20.9289 4.51427 18.7646C4.18231 18.2987 4.00391 17.7409 4.00391 17.1688V16.2488C4.00391 15.0068 5.01076 13.9999 6.25278 13.9999H17.7545ZM12.0004 2.00464C14.7618 2.00464 17.0004 4.24321 17.0004 7.00464C17.0004 9.76606 14.7618 12.0046 12.0004 12.0046C9.23894 12.0046 7.00036 9.76606 7.00036 7.00464C7.00036 4.24321 9.23894 2.00464 12.0004 2.00464Z"
                            fill="#00727A" />
                    </svg>
                @endif
                <span class="sidetext px-1">Benutzer</span>
            </a>

            <a href="{{ route('supervisorleads') }}"
                @if (request()->is('supervisor/leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('supervisor/leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>

            <a href="{{ route('createGroup') }}"
                @if (request()->is('createGroup')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('createGroup'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5 12C20.5376 12 23 14.4624 23 17.5C23 20.5376 20.5376 23 17.5 23C14.4624 23 12 20.5376 12 17.5C12 14.4624 14.4624 12 17.5 12ZM17.5 13.9992L17.4101 14.0073C17.206 14.0443 17.0451 14.2053 17.0081 14.4094L17 14.4992L16.9996 16.9992L14.4977 17L14.4078 17.0081C14.2037 17.0451 14.0427 17.206 14.0057 17.4101L13.9977 17.5L14.0057 17.5899C14.0427 17.794 14.2037 17.9549 14.4078 17.9919L14.4977 18L17.0007 17.9992L17.0011 20.5035L17.0092 20.5934C17.0462 20.7975 17.2071 20.9584 17.4112 20.9954L17.5011 21.0035L17.591 20.9954C17.7951 20.9584 17.956 20.7975 17.9931 20.5934L18.0011 20.5035L18.0007 17.9992L20.5046 18L20.5944 17.9919C20.7985 17.9549 20.9595 17.794 20.9965 17.5899L21.0046 17.5L20.9965 17.4101C20.9595 17.206 20.7985 17.0451 20.5944 17.0081L20.5046 17L17.9996 16.9992L18 14.4992L17.9919 14.4094C17.9549 14.2053 17.794 14.0443 17.5899 14.0073L17.5 13.9992ZM14.254 10C15.0886 10 15.817 10.4544 16.2054 11.1292C13.2353 11.7297 11 14.3538 11 17.5C11 18.7892 11.3753 19.9907 12.0226 21.0012L12.003 21C9.51712 21 7.50193 18.9848 7.50193 16.499V12.25C7.50193 11.0074 8.50929 10 9.75193 10H14.254ZM7.40645 10.0003C6.89291 10.5355 6.56081 11.2462 6.50903 12.0335L6.50193 12.25V16.499C6.50193 17.3456 6.69319 18.1476 7.03487 18.864C6.70577 18.953 6.35899 19 6.00124 19C3.79142 19 2 17.2086 2 14.9988V12.25C2 11.0591 2.92516 10.0844 4.09595 10.0052L4.25 10L7.40645 10.0003ZM19.75 10C20.9926 10 22 11.0074 22 12.25L22.0008 12.8104C20.8328 11.6891 19.2469 11 17.5 11L17.2568 11.0045C17.1013 10.6296 16.8769 10.2894 16.5995 10.0003L19.75 10ZM18.5 4C19.8807 4 21 5.11929 21 6.5C21 7.88071 19.8807 9 18.5 9C17.1193 9 16 7.88071 16 6.5C16 5.11929 17.1193 4 18.5 4ZM12 3C13.6569 3 15 4.34315 15 6C15 7.65685 13.6569 9 12 9C10.3431 9 9 7.65685 9 6C9 4.34315 10.3431 3 12 3ZM5.5 4C6.88071 4 8 5.11929 8 6.5C8 7.88071 6.88071 9 5.5 9C4.11929 9 3 7.88071 3 6.5C3 5.11929 4.11929 4 5.5 4Z"
                            fill="white" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5 12C20.5376 12 23 14.4624 23 17.5C23 20.5376 20.5376 23 17.5 23C14.4624 23 12 20.5376 12 17.5C12 14.4624 14.4624 12 17.5 12ZM17.5 13.9992L17.4101 14.0073C17.206 14.0443 17.0451 14.2053 17.0081 14.4094L17 14.4992L16.9996 16.9992L14.4977 17L14.4078 17.0081C14.2037 17.0451 14.0427 17.206 14.0057 17.4101L13.9977 17.5L14.0057 17.5899C14.0427 17.794 14.2037 17.9549 14.4078 17.9919L14.4977 18L17.0007 17.9992L17.0011 20.5035L17.0092 20.5934C17.0462 20.7975 17.2071 20.9584 17.4112 20.9954L17.5011 21.0035L17.591 20.9954C17.7951 20.9584 17.956 20.7975 17.9931 20.5934L18.0011 20.5035L18.0007 17.9992L20.5046 18L20.5944 17.9919C20.7985 17.9549 20.9595 17.794 20.9965 17.5899L21.0046 17.5L20.9965 17.4101C20.9595 17.206 20.7985 17.0451 20.5944 17.0081L20.5046 17L17.9996 16.9992L18 14.4992L17.9919 14.4094C17.9549 14.2053 17.794 14.0443 17.5899 14.0073L17.5 13.9992ZM14.254 10C15.0886 10 15.817 10.4544 16.2054 11.1292C13.2353 11.7297 11 14.3538 11 17.5C11 18.7892 11.3753 19.9907 12.0226 21.0012L12.003 21C9.51712 21 7.50193 18.9848 7.50193 16.499V12.25C7.50193 11.0074 8.50929 10 9.75193 10H14.254ZM7.40645 10.0003C6.89291 10.5355 6.56081 11.2462 6.50903 12.0335L6.50193 12.25V16.499C6.50193 17.3456 6.69319 18.1476 7.03487 18.864C6.70577 18.953 6.35899 19 6.00124 19C3.79142 19 2 17.2086 2 14.9988V12.25C2 11.0591 2.92516 10.0844 4.09595 10.0052L4.25 10L7.40645 10.0003ZM19.75 10C20.9926 10 22 11.0074 22 12.25L22.0008 12.8104C20.8328 11.6891 19.2469 11 17.5 11L17.2568 11.0045C17.1013 10.6296 16.8769 10.2894 16.5995 10.0003L19.75 10ZM18.5 4C19.8807 4 21 5.11929 21 6.5C21 7.88071 19.8807 9 18.5 9C17.1193 9 16 7.88071 16 6.5C16 5.11929 17.1193 4 18.5 4ZM12 3C13.6569 3 15 4.34315 15 6C15 7.65685 13.6569 9 12 9C10.3431 9 9 7.65685 9 6C9 4.34315 10.3431 3 12 3ZM5.5 4C6.88071 4 8 5.11929 8 6.5C8 7.88071 6.88071 9 5.5 9C4.11929 9 3 7.88071 3 6.5C3 5.11929 4.11929 4 5.5 4Z"
                            fill="#00727A" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Teams Erstellen</span>
            </a>

            <a href="{{ route('getGroups') }}"
                @if (request()->is('supervisor/teams')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('supervisor/teams'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.754 10C15.7205 10 16.504 10.7835 16.504 11.75V16.499C16.504 18.9848 14.4888 21 12.003 21C9.51712 21 7.50193 18.9848 7.50193 16.499V11.75C7.50193 10.7835 8.28543 10 9.25193 10H14.754ZM7.13128 9.99906C6.78183 10.4218 6.55636 10.9508 6.51057 11.5304L6.50193 11.75V16.499C6.50193 17.3456 6.69319 18.1476 7.03487 18.864C6.70577 18.953 6.35899 19 6.00124 19C3.79142 19 2 17.2086 2 14.9988V11.75C2 10.8318 2.70711 10.0788 3.60647 10.0058L3.75 10L7.13128 9.99906ZM16.8747 9.99906L20.25 10C21.2165 10 22 10.7835 22 11.75V15C22 17.2091 20.2091 19 18 19C17.6436 19 17.298 18.9534 16.9691 18.8659C17.2697 18.238 17.4538 17.5452 17.4951 16.8144L17.504 16.499V11.75C17.504 11.0847 17.2678 10.4747 16.8747 9.99906ZM12 3C13.6569 3 15 4.34315 15 6C15 7.65685 13.6569 9 12 9C10.3431 9 9 7.65685 9 6C9 4.34315 10.3431 3 12 3ZM18.5 4C19.8807 4 21 5.11929 21 6.5C21 7.88071 19.8807 9 18.5 9C17.1193 9 16 7.88071 16 6.5C16 5.11929 17.1193 4 18.5 4ZM5.5 4C6.88071 4 8 5.11929 8 6.5C8 7.88071 6.88071 9 5.5 9C4.11929 9 3 7.88071 3 6.5C3 5.11929 4.11929 4 5.5 4Z"
                            fill="white" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.754 10C15.7205 10 16.504 10.7835 16.504 11.75V16.499C16.504 18.9848 14.4888 21 12.003 21C9.51712 21 7.50193 18.9848 7.50193 16.499V11.75C7.50193 10.7835 8.28543 10 9.25193 10H14.754ZM7.13128 9.99906C6.78183 10.4218 6.55636 10.9508 6.51057 11.5304L6.50193 11.75V16.499C6.50193 17.3456 6.69319 18.1476 7.03487 18.864C6.70577 18.953 6.35899 19 6.00124 19C3.79142 19 2 17.2086 2 14.9988V11.75C2 10.8318 2.70711 10.0788 3.60647 10.0058L3.75 10L7.13128 9.99906ZM16.8747 9.99906L20.25 10C21.2165 10 22 10.7835 22 11.75V15C22 17.2091 20.2091 19 18 19C17.6436 19 17.298 18.9534 16.9691 18.8659C17.2697 18.238 17.4538 17.5452 17.4951 16.8144L17.504 16.499V11.75C17.504 11.0847 17.2678 10.4747 16.8747 9.99906ZM12 3C13.6569 3 15 4.34315 15 6C15 7.65685 13.6569 9 12 9C10.3431 9 9 7.65685 9 6C9 4.34315 10.3431 3 12 3ZM18.5 4C19.8807 4 21 5.11929 21 6.5C21 7.88071 19.8807 9 18.5 9C17.1193 9 16 7.88071 16 6.5C16 5.11929 17.1193 4 18.5 4ZM5.5 4C6.88071 4 8 5.11929 8 6.5C8 7.88071 6.88071 9 5.5 9C4.11929 9 3 7.88071 3 6.5C3 5.11929 4.11929 4 5.5 4Z"
                            fill="#00727A" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Teams</span>
            </a>
        @elseif(Auth::user()->hasRole(['team_leader']))
            <a href="{{ route('leads.team_leader') }}"
                @if (request()->is('team_leader/leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('team_leader/leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
        @elseif (Auth::user()->hasRole(['quality_agent']))
            <a href="{{ route('quality_leads') }}"
                @if (request()->is('quality_agent/leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('quality_agent/leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
        @elseif(Auth::user()->hasRole(['umfrage_agent']))
            <a href="{{ route('leads_umfrage') }}"
                @if (request()->is('umfrage_agent/leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('umfrage_agent/leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
        @elseif(Auth::user()->hasRole(['call_agent']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" href="{{ route('callagentleads') }}"
                @if (request()->is('leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
            </a>
        @elseif(Auth::user()->hasRole(['umfrage_leader']))
            <a class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" href="{{ route('leads_umfrage_leader') }}"
                @if (request()->is('leads_umfrage_leader')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('leads_umfrage_leader'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
            </a>
        @elseif(Auth::user()->hasRole(['confirmation_agent']))
            <a href="{{ route('confirmation_agent_leads') }}"
                @if (request()->is('confirmation_agent/leads')) ? style="background-color: #00727A; color:white" : "" @endif>
                @if (request()->is('confirmation_agent/leads'))
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="white" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="#00727A" />
                    </svg>
                @else
                    <svg width="24" class="ms-3" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="4" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="2" y="13" width="20" height="7" rx="1"
                            fill="#00727A" />
                        <rect x="4" y="6" width="3" height="3" rx="1"
                            fill="white" />
                        <rect x="4" y="15" width="3" height="3" rx="1"
                            fill="white" />
                    </svg>
                @endif
                <span class="px-1 sidetext">Leads</span>
            </a>
        @endif
    </div>
</div>
