import Index from "./index";

window.Vue = require("vue");

Vue.component("index", require("./index.vue").default);

const app = new Vue({
  el: "#app",
  components: {
    Index: Index,
  },
});
