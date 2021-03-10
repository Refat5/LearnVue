require("./bootstrap");

import "vue-js-modal/dist/styles.css";

import VModal from "vue-js-modal/dist/index.nocss.js";
import Vue from "vue";
import VueRouter from "vue-router";
import { routes } from "./router";

Vue.use(VueRouter);
Vue.use(VModal);

Vue.use(VModal, { dynamicDefault: { draggable: true, resizable: true } });

Vue.component(
    "crud-component",
    require("./Components/CrudComponent.vue").default
);

Vue.component(
    "app-sidebar",
    require("./Components/AppSidebarComponent").default
);

const router = new VueRouter({
    routes,
    mode: "history"
});
const app = new Vue({
    el: "#app",
    router
});
