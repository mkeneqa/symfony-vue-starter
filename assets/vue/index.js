import Vue from "vue";
import App from "./App";
import router from "./Router";

new Vue({
    components: { App },
    template: "<App/>",
    router
}).$mount("#app");
