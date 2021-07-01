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
    console.log("1");
    if (localStorage.getItem("username") == null) {
      console.log("2");
      next({
        path: "/login",
        //params: { nextUrl: to.fullPath },
      });
    } else {
      console.log("3");
      let user = localStorage.getItem("username");
      if (to.matched.some((record) => record.meta.is_admin)) {
        console.log("4");
        if (user === "admin") {
          console.log("5");
          next();
        } else {
          console.log("6");
          next({ name: "UserDashboard" });
        }
      }

      if (to.matched.some((record) => record.meta.is_user)) {
        console.log("4");
        if (user != "admin") {
          console.log("5");
          next();
        } else {
          console.log("6");
          next({ name: "dashboard" });
        }
      }
    }
  } else if (to.matched.some((record) => record.meta.guest)) {
    console.log("8");
    if (localStorage.getItem("username") == null) {
      console.log("9");
      next();
    } else {
      let user = localStorage.getItem("username");
      if (user == "admin") {
        console.log("5");
        next({ name: "dashboard" });
      } else {
        console.log("6");
        next({ name: "UserDashboard" });
      }
    }
  } else if (to.matched.some((record) => record.meta.home)) {
    console.log("8");
    if (localStorage.getItem("username") == null) {
      console.log("9");
      next();
    } else {
      let user = localStorage.getItem("username");
      if (user == "admin") {
        console.log("5");
        next({ name: "dashboard" });
      } else {
        console.log("6");
        next({ name: "UserDashboard" });
      }
    }
  } else {
    console.log("s");
    next();
  }
});

export default router;

new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");
