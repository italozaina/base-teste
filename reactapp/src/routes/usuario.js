import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/usuario/';

export default [
  <Route path="/usuarios/create" component={Create} exact key="create" />,
  <Route path="/usuarios/edit/:id" component={Update} exact key="update" />,
  <Route path="/usuarios/show/:id" component={Show} exact key="show" />,
  <Route path="/usuarios/" component={List} exact strict key="list" />,
  <Route path="/usuarios/:page" component={List} exact strict key="page" />
];
