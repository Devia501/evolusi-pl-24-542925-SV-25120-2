<template>
  <div class="app-layout">
    <aside class="sidebar">
      <div class="brand">
        <div class="brand-icon">
          A
        </div>

        <div>
          <h1>Akademik</h1>
          <p>Student Portal</p>
        </div>
      </div>

      <nav class="sidebar-nav">
        <RouterLink
          to="/"
          class="nav-item"
        >
          <span>⌂</span>
          Dashboard
        </RouterLink>

        <RouterLink
          to="/mahasiswa"
          class="nav-item"
        >
          <span>◫</span>
          Mahasiswa
        </RouterLink>
      </nav>

      <div class="sidebar-footer">
        <p>Software Engineering</p>
        <span>Laravel + Vue 3</span>
      </div>
    </aside>

    <div class="main-area">
      <header class="topbar">
        <div>
          <p class="eyebrow">
            Academic Management
          </p>
          <h2>Student Management System</h2>
        </div>

        <div class="profile-chip">
          <div class="avatar">
            DA
          </div>

          <div>
            <strong>Admin</strong>
            <span>Administrator</span>
          </div>
        </div>
      </header>

      <main class="content">
        <RouterView />
      </main>
    </div>
  </div>
</template>

<script setup></script>
