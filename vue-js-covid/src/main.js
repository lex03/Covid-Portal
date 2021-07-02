import Vue from "vue";
import App from "./App.vue";
import VueRouter from "vue-router";
import Home from "./components/Home.vue";
import Dashboard from "./components/Dashboard.vue";
import UserDashboard from "./components/UserDashboard.vue";
import Login from "./components/Login.vue";
Vue.config.productionTip = false;

Vue.use(VueRouter);

let router = new VueRouter({
  mode: "history",
  routes: [
    {
      path: "/",
      name: "Home",
      component: Home,
      meta: {
        home: true,
      },
    },
    {
      path: "/login",
      name: "login",
      component: Login,
      meta: {
        guest: true,
      },
    },
    {
      path: "/userdashboard",
      name: "UserDashboard",
      component: UserDashboard,
      meta: {
        requiresAuth: true,
        is_user: true,
      },
    },
    {
      path: "/dashboard",
      name: "dashboard",
      component: Dashboard,
      meta: {
        requiresAuth: true,
        is_admin: true,
      },
    },
  ],
});

router.beforeEach((to, from, next) => {
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    if (localStorage.getItem("username") == null) {
      next({
        path: "/login",
        //params: { nextUrl: to.fullPath },
      });
    } else {
      let user = localStorage.getItem("username");
      if (to.matched.some((record) => record.meta.is_admin)) {
        if (user === "admin") {
          next();
        } else {
          next({ name: "UserDashboard" });
        }
      }

      if (to.matched.some((record) => record.meta.is_user)) {
        if (user != "admin") {
          next();
        } else {
          next({ name: "dashboard" });
        }
      }
    }
  } else if (to.matched.some((record) => record.meta.guest)) {
    if (localStorage.getItem("username") == null) {
      next();
    } else {
      let user = localStorage.getItem("username");
      if (user == "admin") {
        next({ name: "dashboard" });
      } else {
        next({ name: "UserDashboard" });
      }
    }
  } else if (to.matched.some((record) => record.meta.home)) {
    if (localStorage.getItem("username") == null) {
      next();
    } else {
      let user = localStorage.getItem("username");
      if (user == "admin") {
        next({ name: "dashboard" });
      } else {
        next({ name: "UserDashboard" });
      }
    }
  } else {
    next();
  }
});

export default router;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
