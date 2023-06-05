import { Component } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-store-signup',
  templateUrl: './store-signup.component.html',
  styleUrls: ['./store-signup.component.css']
})
export class StoreSignupComponent {
  constructor (public router: Router) {}

  public store_name = "";
  public store_address = ""
  public store_email = "";
  public store_phone_no = "";
  public store_password = "";
  public storeArray:any = [];

  ngOnInit () {
    if (localStorage.getItem("stores")) {
      let stores:any = localStorage.getItem("stores");
      this.storeArray = JSON.parse(stores);
    } else {
      this.storeArray = [];
    }
  }

  storeSignUp () {
    let storeObj:any = {
      store_name: this.store_name, 
      store_address: this.store_address, 
      store_email: this.store_email,
      store_phone: this.store_phone_no,
      store_password: this.store_password,
      status: "seller"
    }
    this.storeArray.push(storeObj);
    localStorage.setItem("stores", JSON.stringify(this.storeArray));
    this.router.navigate(["/store/signin"]);

  }

}
