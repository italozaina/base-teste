import { Component, OnInit } from '@angular/core';
import { CrudService } from '../crud.service';
import { Usuario } from '../interfaces/usuario';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.sass']
})
export class HomeComponent implements OnInit {

  usuarios: Usuario[] = [];

  constructor(public crudService: CrudService) { }

  ngOnInit(): void {
    this.crudService.getAll().subscribe((data: Usuario[])=>{
      console.log(data);
      this.usuarios = data;
    })  
  }

}
