require('mdbvue');
import '@fortawesome/fontawesome-free/css/all.min.css'
import 'bootstrap-css-only/css/bootstrap.min.css'
import 'mdbvue/lib/css/mdb.min.css'

import Vue from 'vue'

import VcUsers from './components/users.vue'

new Vue({
    el: '.container',

    components: {
        VcUsers
    },

    data: {
        title: 'Usuários'
    }
})
