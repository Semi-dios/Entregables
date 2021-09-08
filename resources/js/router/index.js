import Vue from 'vue';
import VueRouter from 'vue-router';


const router = new VueRouter({
  history,
  routes:[

    {
      path: '/',
      name:'dashboard',
      component: require('../views/Landing.vue').default,
    },
    {
      path: '/curriculum',
      name:'curriculum',
      component: require('../views/Curriculum.vue').default,
    },

  ]
});



export default router;

