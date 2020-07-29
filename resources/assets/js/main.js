import Vue from 'vue'

import VcUsers from './components/users.vue'

new Vue({
    el: '.container',

    components: {
        VcUsers
    },

    data: {
        title: 'Teste'
    }
})
