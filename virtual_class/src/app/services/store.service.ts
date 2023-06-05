import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class StoreService {

  constructor() { }

  public getStores () {
    let stores:any = localStorage.getItem("stores");
    return JSON.parse(stores);
  }
}
