import './bootstrap';

import {createApp} from "vue/dist/vue.esm-bundler";

import Header from "./components/Layouts/Header.vue"
import Footer from "./components/Layouts/Footer.vue"

import FormLogin from "./components/Auth/FormLogin.vue"

import 'bootstrap'

const app = createApp({})

app.component('header-component', Header);
app.component('footer-component', Footer);
app.component('form-login', FormLogin);

app.mount("#app")