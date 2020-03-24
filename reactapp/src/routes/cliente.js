import React from 'react';
import { Route } from 'react-router-dom';
import { List, Create, Update, Show } from '../components/cliente/';

export default [
  <Route path="/clientes/create" component={Create} exact key="create" />,
  <Route path="/clientes/edit/:id" component={Update} exact key="update" />,
  <Route path="/clientes/show/:id" component={Show} exact key="show" />,
  <Route path="/clientes/" component={List} exact strict key="list" />,
  <Route path="/clientes/:page" component={List} exact strict key="page" />
];
