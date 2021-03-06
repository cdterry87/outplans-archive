<div class="w-64">
  <div class="h-full bg-gray-100 rounded-md shadow-md">
      <div class="mx-4 border-b-2">
          <a href="/dashboard" class="block w-full h-full py-4 hover:text-blue-700 {{ Request::routeIs('dashboard') ? 'link' : '' }}">
              <i class="fas fa-tachometer-alt"></i>
              Dashboard
          </a>
      </div>
      <div class="mx-4 border-b-2">
          <a href="/plans" class="block w-full h-full py-4 hover:text-blue-700 {{ Route::is('plans.index') ? 'link' : '' }}">
              <i class="fas fa-calendar-alt"></i>
              Plans
          </a>
      </div>
      <div class="mx-4 border-b-2">
          <a href="/invites" class="block w-full h-full py-4 hover:text-blue-700 {{ Route::is('invites') ? 'link' : '' }}">
              <i class="fas fa-envelope-open-text"></i>
              Invites
          </a>
      </div>
      <div class="mx-4 border-b-2">
          <a href="/attended" class="block w-full h-full py-4 hover:text-blue-700 {{ Route::is('attended') ? 'link' : '' }}">
              <i class="fas fa-history"></i>
              Attended
          </a>
      </div>
      <div class="mx-4 border-b-2">
          <a href="/friends" class="block w-full h-full py-4 hover:text-blue-700 {{ Route::is('friends') ? 'link' : '' }}">
              <i class="fas fa-user-friends"></i>
              Friends
          </a>
      </div>
      <div class="mx-4">
          <a href="/messages" class="block w-full h-full py-4 hover:text-blue-700 {{ Route::is('messages') ? 'link' : '' }}">
              <i class="fas fa-envelope"></i>
              Messages
          </a>
      </div>
  </div>
</div>