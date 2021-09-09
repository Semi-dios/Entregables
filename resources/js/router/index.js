import Vue from 'vue';
import VueRouter from 'vue-router';


const router = new VueRouter({
  history,
  base: //Active into heroku
  'http://entregables.herokuapp.com/public/',
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
    {
        path: '/users',
        name: 'users',
        component: require('../views/User.vue').default,

    },
    {
        path: '/users/:id/show',
        name: 'users.show',
        component: require('../views/user/Show.vue').default,

    },
    {
        path: '/users/:id/edit',
        name: 'users.edit',
        component: require('../views/user/Edit.vue').default,

    },


  ]
});



export default router;

