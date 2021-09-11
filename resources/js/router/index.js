import Vue from 'vue';
import VueRouter from 'vue-router';


const router = new VueRouter({
  history,
  base: window.location.origin,
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
    {
        path: '/products',
        name: 'products',
        component: require('../views/Product.vue').default,

    },
    {
        path: '/products/:id/show',
        name: 'products.show',
        component: require('../views/product/Show.vue').default,

    },
    {
        path: '/products/:id/edit',
        name: 'products.edit',
        component: require('../views/product/Edit.vue').default,

    },


  ]
});




export default router;

