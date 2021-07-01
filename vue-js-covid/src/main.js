import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import routes from "./routes";
// import Vue from "vue";
// import VueSession from "vue-session";
// Vue.use(VueSession);

Vue.config.productionTip = false;

Vue.use(VueRouter);

const router = new VueRouter({ routes });

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
