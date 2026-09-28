<template>
  <section>
    <div class="page-heading">
      <div>
        <p class="eyebrow">
          Student Management
        </p>
        <h1>Data Mahasiswa</h1>
        <p class="page-description">
          Daftar mahasiswa yang diambil langsung dari Laravel API.
        </p>
      </div>

      <button
        class="primary-button"
        @click="loadMahasiswa"
      >
        ↻ Refresh Data
      </button>
    </div>

    <div
      v-if="loading"
      class="state-card"
    >
      <div class="loader" />
      <p>Memuat data mahasiswa...</p>
    </div>

    <div
      v-else-if="error"
      class="state-card error-state"
    >
      <div class="state-icon">
        !
      </div>

      <h3>Gagal mengambil data</h3>

      <p>{{ error }}</p>

      <button
        class="secondary-button"
        @click="loadMahasiswa"
      >
        Coba Lagi
      </button>
    </div>

    <div
      v-else
      class="data-card"
    >
      <div class="data-card-header">
        <div>
          <h2>Daftar Mahasiswa</h2>
          <p>{{ mahasiswa.length }} data ditemukan</p>
        </div>

        <div class="api-status">
          <span class="status-dot" />
          API Connected
        </div>
      </div>

      <div
        v-if="mahasiswa.length === 0"
        class="empty-state"
      >
        <div class="empty-icon">
          ◫
        </div>

        <h3>Belum ada data</h3>

        <p>Data mahasiswa belum tersedia di database.</p>
      </div>

      <div
        v-else
        class="table-wrapper"
      >
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Mahasiswa</th>
              <th>NIM</th>
              <th>Program Studi</th>
            </tr>
          </thead>

          <tbody>
            <tr
              v-for="(item, index) in mahasiswa"
              :key="item.id"
            >
              <td>
                <span class="number-badge">
                  {{ index + 1 }}
                </span>
              </td>

              <td>
                <div class="student-cell">
                  <div class="student-avatar">
                    {{ getInitial(item.nama) }}
                  </div>

                  <div>
                    <strong>{{ item.nama }}</strong>
                    <span>Mahasiswa aktif</span>
                  </div>
                </div>
              </td>

              <td>
                <span class="nim-text">
                  {{ item.nim }}
                </span>
              </td>

              <td>
                <span class="program-badge">
                  {{ item.prodi }}
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";
import { getInitial } from "../utils/student";

const mahasiswa = ref([]);
const loading = ref(true);
const error = ref("");

const apiUrl = import.meta.env.VITE_API_URL;

const loadMahasiswa = async () => {
    loading.value = true;
    error.value = "";

    try {
        const response = await axios.get(`${apiUrl}/mahasiswa`);
        mahasiswa.value = response.data;
    } catch {
        error.value =
            "Tidak dapat terhubung ke server Laravel. Pastikan php artisan serve sedang berjalan.";
    } finally {
        loading.value = false;
    }
};

onMounted(loadMahasiswa);
</script>
