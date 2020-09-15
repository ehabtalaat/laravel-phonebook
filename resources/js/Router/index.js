import Vue from "vue";
import VueRouter from "vue-router";
import home from "../components/home";
import about from "../components/about";
Vue.use(VueRouter);
const routes = [
{name:"home",component:home,path:"/api/phonebook"
},
{name:"about",component:about,path:"/api/phonebook/about"
},
];
const router = new VueRouter({
	routes,
	mode:"history"
});
export default router;