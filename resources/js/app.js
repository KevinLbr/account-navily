import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler";

import Header from "./components/Header.vue"
import Footer from "./components/Footer.vue"

import 'bootstrap'

const app = createApp({})

app.component('header-component', Header);
app.component('footer-component', Footer);

app.mount("#app")