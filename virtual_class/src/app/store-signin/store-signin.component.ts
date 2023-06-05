import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { StoreService } from '../services/store.service';

@Component({
  selector: 'app-store-signin',
  templateUrl: './store-signin.component.html',
  styleUrls: ['./store-signin.component.css']
})
export class StoreSigninComponent {
  constructor (public router: Router, public storeService: StoreService) {}

  public store_email = "";
  public store_password = "";
  public storeArray:any = [];
  public message = "";

  ngOnInit () {
    // let stores:any = localStorage.getItem("stores");
    // this.storeArray = JSON.parse(stores);

    // using services
    this.storeArray = this.storeService.getStores();
    console.log(this.storeService.getStores());
  }

  storeSignIn () {
    let findStore = this.storeArray.find((each:any) => each.store_email == this.store_email && each.store_password == this.store_password);
    if (findStore) {
      localStorage.setItem("onlinePerson", JSON.stringify(findStore));
      this.router.navigate(['store/product']);
    } else {
      this.message = "You are not sign up on our platform!";
    }
  }
}
