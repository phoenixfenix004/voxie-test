
import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import NavBarComponent from './components/NavBar/NavBarComponent'
import MainMenuComponent from './components/MainMenu/MainMenuComponent'
import HomeComponent from './components/Home/HomeComponent'

Vue.use(VueAxios, axios)


const app = new Vue({
    el: '#app',
    components: {
        NavBarComponent,
        MainMenuComponent,
        HomeComponent,
    },

    data() {
        return { }
    },

    mounted() {
    }

})

export default app;
