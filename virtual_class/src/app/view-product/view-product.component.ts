import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-view-product',
  templateUrl: './view-product.component.html',
  styleUrls: ['./view-product.component.css']
})
export class ViewProductComponent {
  constructor (public actRoute: ActivatedRoute) {}

  ngOnInit () {
    let product_id = this.actRoute.snapshot.params['id'];
    console.log(product_id);
    let getProduct:any = localStorage.getItem("storesProduct");
    let product = JSON.parse(getProduct);
    let findProduct = product.find((each: any, i: number) => i == product_id);
    console.log(findProduct);
  }

}
