import Vue from 'vue'
import VueRouter from 'vue-router'

import HomeComponent from '../components/home/HomeComponent.vue'
import SoalComponent from '../components/soal/SoalComponent.vue'
import HasilComponent from '../components/hasil/HasilComponent.vue'
import PengaturanComponent from '../components/pengaturan/PengaturanComponent.vue'
import SiswaComponent from '../components/siswa/SiswaComponent.vue'

const routes = [
    //HOME
    { name: 'home',              path: '/home',             component: HomeComponent },
    //SOAL
    { name: 'soal',              path: '/soal',             component: SoalComponent },
    //Hasil
    { name: 'hasil',              path: '/hasil',             component: HasilComponent},
    // Pengaturan
    { name: 'pengaturan',         path: '/pengaturan',     component: PengaturanComponent },
    //Siswa
    { name: 'siswa',         path: '/siswa',     component: SiswaComponent }

]

Vue.use(VueRouter)
const router = new VueRouter({
    routes, // short for `routes: routes`
    hasbang:false,
    mode:'history'
  })
  export default router
