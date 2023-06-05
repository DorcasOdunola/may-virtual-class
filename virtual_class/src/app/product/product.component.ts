import { Component } from '@angular/core';
import { number } from 'yup';

@Component({
  selector: 'app-product',
  templateUrl: './product.component.html',
  styleUrls: ['./product.component.css']
})

export class ProductComponent {
  // public, private, protected
  public product_name:string = "";
  public product_desc = "";
  public product_price = "";
  public product_quantity = "";
  public product_obj:any = {};
  public productArray:any = []

  ngOnInit () {
    if (localStorage.getItem("storesProduct")) {
      let products:any = localStorage.getItem("storesProduct");
      this.productArray = JSON.parse(products);
    } else {
      this.productArray = [];
    }

  }

  //function
  addProduct () {
    //using an obj
    // this.product_obj = {product_name: this.product_name};
    // console.log(this.product_obj);
    // using an array
    let obj = {product_name : this.product_name};
    this.productArray.push(obj);
    localStorage.setItem("storesProduct", JSON.stringify(this.productArray));
    
    this.product_name = "";
  }

  deleteProduct (i:number) {
    // let products = this.productArray.filter((in:number) => {} )
    let products = this.productArray.filter((each:object, index:number) => index !== i);
    this.productArray = products;
  }

}
