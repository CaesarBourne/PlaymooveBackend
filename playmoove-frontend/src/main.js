import { createApp } from "vue";
import App from "./App.vue";
import "./index.css";
import router from "./router";
import axios from "axios";

// import "./assets/tailwind.css";
axios.defaults.baseURL = "http://localhost:8000";

createApp(App).use(router).mount("#app");
