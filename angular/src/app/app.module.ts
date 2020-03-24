import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { CrudRoutingModule } from './crud/crud-routing.module';
import { CrudModule } from './crud/crud.module';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaterialModule } from './material/material.module';

@NgModule({
  declarations: [
    AppComponent,    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    CrudModule,
    CrudRoutingModule,
    BrowserAnimationsModule,
    MaterialModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
