import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import home from '../pages/home.vue'
import SignIn from '../components/signin.vue'
import SignUp from '../components/signup.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/home',
      name: 'Home',
      component: home
    },
    {
      path: '/signin',
      name: 'SignIn',
      component: SignIn
    },
    {
      path: '/signup',
      name: 'SignUp',
      component: SignUp
    },
   
  ]
})