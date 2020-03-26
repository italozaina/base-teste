import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.sass']
})
export class LoginComponent implements OnInit {

  user = {username:null, password:null}

  constructor(private authService: AuthService) { }

  ngOnInit(): void {
  }

  fazerLogin(){
    console.log(this.user);
  }

}
