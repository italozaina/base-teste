export default {
  path: '/{{{name}}}',
  name: '{{{name}}}',
  component: () => import('../components/{{{lc}}}/Layout'),
  redirect: { name: '{{{titleUcFirst}}}List' },
  children: [
    {
      name: '{{{titleUcFirst}}}List',
      path: '',
      component: () => import('../views/{{{lc}}}/List')
    },
    {
      name: '{{{titleUcFirst}}}New',
      path: 'new',
      component: () => import('../views/{{{lc}}}/New')
    },
    {
      name: '{{{titleUcFirst}}}Update',
      path: ':id/edit',
      component: () => import('../views/{{{lc}}}/Update')
    },
    {
      name: '{{{titleUcFirst}}}Show',
      path: ':id',
      component: () => import('../views/{{{lc}}}/Show')
    }
  ]
};
