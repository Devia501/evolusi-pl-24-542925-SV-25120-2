<template>
    <section>
        <div class="page-heading">
            <div>
                <p class="eyebrow">Overview</p>
                <h1>Welcome back to Student Portal 👋</h1>
                <p class="page-description">
                    Kelola dan pantau data mahasiswa melalui satu dashboard.
                </p>
            </div>

            <RouterLink to="/mahasiswa" class="primary-button">
                Lihat Data Mahasiswa
                <span>→</span>
            </RouterLink>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon blue">👥</div>

                <div>
                    <span>Total Mahasiswa</span>
                    <strong>1</strong>
                    <small>Data terdaftar</small>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon green">✓</div>

                <div>
                    <span>Program Studi</span>
                    <strong>1</strong>
                    <small>Program aktif</small>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">◫</div>

                <div>
                    <span>Status Sistem</span>
                    <strong>Active</strong>
                    <small>Backend terhubung</small>
                </div>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="welcome-card">
                <div class="welcome-content">
                    <p class="eyebrow">Student Database</p>

                    <h2>
                        Kelola data mahasiswa
                        <br />
                        dengan lebih mudah.
                    </h2>

                    <p>
                        Gunakan halaman mahasiswa untuk melihat data yang
                        berasal langsung dari REST API Laravel.
                    </p>

                    <RouterLink to="/mahasiswa" class="secondary-button">
                        Buka Data Mahasiswa
                    </RouterLink>
                </div>

                <div class="welcome-illustration">
                    <div class="floating-card card-one">
                        <strong>API</strong>
                        <span>Connected</span>
                    </div>

                    <div class="floating-card card-two">
                        <strong>Vue 3</strong>
                        <span>Frontend</span>
                    </div>

                    <div class="illustration-circle" />
                </div>
            </div>
        </div>
    </section>
</template>

<script setup></script>
