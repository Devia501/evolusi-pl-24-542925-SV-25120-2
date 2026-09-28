import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../views/HomeView.vue";
import MahasiswaView from "../views/MahasiswaView.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: "/",
            name: "home",
            component: HomeView,
        },
        {
            path: "/mahasiswa",
            name: "mahasiswa",
            component: MahasiswaView,
        },
    ],
});

export default router;
