import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler";

import Test from "./components/test.vue"

const app = createApp({
    components: {
        Test
    }
})

app.mount("#app")