<style>
    .dropdown {
      position: relative;
      display: flex;
      align-items: center;
      font-family: "Poppins", Sans-serif;
      color: var(--e-global-color-cfa1f76);
    }

    @media(max-width:1024px){
        .dropdown{
            margin: 0 1rem;
        }
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
        flex-direction: column;
        align-items: center;
        top: 70%;
    }

    html[dir="ltr"] .dropdown-content{
        right: 0;
    }

    .dropdown:hover .dropdown-content {
        display: flex;
    }
    .dropdown-content a {
        color: black;
        padding: 5px 16px;
        text-decoration: none;
        display: block;
        font-family: "Poppins", Sans-serif;
    }
    </style>

    @if (session()->has('lang') && session('lang') == 'ar')
        <div class="dropdown">
            <span style="display: flex; justify-content: space-between; align-items: center;">
                عربي
                <i class="fa fa-angle-down" style="margin: 0 0.5rem;"></i>
            </span>
            <div class="dropdown-content">
            <a href="{{ route('lang','en') }}">English</a>
            <a href="javascript:void(0)">عربي</a>
            </div>
        </div>
    @else
        <div class="dropdown">
            <span style="display: flex; justify-content: space-between; align-items: center;">
                English
                <i class="fa fa-angle-down" style="margin: 0 0.5rem;"></i>
            </span>
            <div class="dropdown-content">
            <a href="javascript:void(0)">English</a>
            <a href="{{ route('lang','ar') }}">عربي</a>
            </div>
        </div>
    @endif


