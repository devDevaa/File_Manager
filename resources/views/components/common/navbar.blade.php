<div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost ps-1 text-xl"> <img src="{{ asset('images/icon.png') }}" class="ps-2 w-10" alt=""> File Master </a>
    </div>

    <div class="flex-none px-5">

        <button class="btn btn-primary btn-sm px-4 mx-4" onclick="addFileModal.showModal()">Upload File</button>

      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img
              alt="Tailwind CSS Navbar component"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
          </div>
        </div>
        <ul
          tabindex="0"
          class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
          <li>
            <a class="justify-between">
              Profile
            </a>
          </li>
          <li><a href="#" onclick="logoutModal.showModal()">Logout</a></li>
          <li class="pt-5"> <x-common.themeSwitch />  </li>
        </ul>
      </div>
    </div>

    <livewire:auth.logout>
    <livewire:files.add-files>
  </div>
