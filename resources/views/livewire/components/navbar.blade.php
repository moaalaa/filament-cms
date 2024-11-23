<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div class="btn btn-circle btn-ghost" role="button" tabindex="0">
                <x-mary-icon name="c-bars-3" />
            </div>
            <ul class="menu dropdown-content menu-sm z-[1] mt-3 w-52 rounded-box bg-base-100 p-2 shadow" tabindex="0">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <button class="btn btn-circle btn-ghost">
            <x-mary-icon name="m-magnifying-glass" />
        </button>
        <button class="btn btn-circle btn-ghost">
            <div class="indicator">
                <x-mary-icon name="o-bell" />
                <span class="badge indicator-item badge-primary badge-xs"></span>
            </div>
        </button>
    </div>
</div>
