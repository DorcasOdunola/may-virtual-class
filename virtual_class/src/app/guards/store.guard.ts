import { CanActivateChildFn } from '@angular/router';

export const storeGuard: CanActivateChildFn = (childRoute, state) => {
  // constructor () {}
  let onlinePerson:any = localStorage.getItem("onlinePerson");
  let person = JSON.parse(onlinePerson);
  if (person && person.status == "seller") {
    return true
  }
  return false;
};
