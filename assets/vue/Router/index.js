import Vue from "vue";
import VueRouter from "vue-router";
import Home from "../Views/Home";
import About from "../Views/About";

Vue.use(VueRouter);

export default new VueRouter({
    mode: "history",
        routes: [
        { path: "/home", component: Home },
        { path: "*", redirect: "/home" },
        { path: "/about", component: About },
        { path: "*", redirect: "/about" }
        ]
});
