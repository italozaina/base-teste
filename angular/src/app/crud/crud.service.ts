import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse, HttpHeaders } from "@angular/common/http";

import { throwError, Observable } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Usuario } from './interfaces/usuario';
import { Cliente } from './interfaces/cliente';

@Injectable({
  providedIn: 'root'
})
export class CrudService {

  private apiServer = "http://localhost:8000";
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }
  httpGetOptions = {
    headers: new HttpHeaders({
      'Accept': 'application/ld+json'
    })
  }
  constructor(private httpClient: HttpClient) { }

  create(usuario): Observable<Usuario> {
    return this.httpClient.post<Usuario>(this.apiServer + '/usuarios/', JSON.stringify(usuario), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }  
  getById(id): Observable<Usuario> {
    return this.httpClient.get<Usuario>(this.apiServer + '/usuarios/' + id, this.httpGetOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  getAll(): Observable<Usuario[]> {
    return this.httpClient.get<Usuario[]>(this.apiServer + '/usuarios/', this.httpGetOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  update(id, usuario): Observable<Usuario> {
    return this.httpClient.put<Usuario>(this.apiServer + '/usuarios/' + id, JSON.stringify(usuario), this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  delete(id){
    return this.httpClient.delete<Usuario>(this.apiServer + '/usuarios/' + id, this.httpOptions)
    .pipe(
      catchError(this.errorHandler)
    )
  }
  errorHandler(error) {
     let errorMessage = '';
     if(error.error instanceof ErrorEvent) {
       // Get client-side error
       errorMessage = error.error.message;
     } else {
       // Get server-side error
       errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
     }
     console.log(errorMessage);
     return throwError(errorMessage);
  } 
}
