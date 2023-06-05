import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.css']
})
export class SigninComponent {
  constructor (public router: Router) {}
  // public route = ''

  signIn () {
    this.router.navigate(["/product"]);
  }
}
