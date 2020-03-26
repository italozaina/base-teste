import { Component, OnInit } from '@angular/core';
import { AuthService } from '../auth.service';
import { Router } from '@angular/router'

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.sass']
})
export class LoginComponent implements OnInit {

  user = {username:null, password:null}

  constructor(private authService: AuthService, private router: Router) { }

  ngOnInit(): void {
  }

  fazerLogin(){
    this.authService.loginUser(this.user)
      .subscribe(
        res => {
          console.log(res);
          localStorage.setItem('token', res.token);
          this.router.navigate(['/crud/home'])
        },
        err => console.log(err)
      )

  }

}
