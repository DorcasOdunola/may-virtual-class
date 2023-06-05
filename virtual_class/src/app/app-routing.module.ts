import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ProductComponent } from './product/product.component';
import { SigninComponent } from './signin/signin.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { StoreSignupComponent } from './store-signup/store-signup.component';
import { StoreSigninComponent } from './store-signin/store-signin.component';
import { storeGuard } from './guards/store.guard';
import { ViewProductComponent } from './view-product/view-product.component';
import { UserSignupComponent } from './user-signup/user-signup.component';

const routes: Routes = [
  {path: "", redirectTo: "/signin", pathMatch: 'full'},
  // {path: "", component: HomeComponent},
  {path: "signin", component: SigninComponent},
  {path: "signup", component: UserSignupComponent},
  {path: "store", children: [
    {path: "", redirectTo: "/store/signin", pathMatch: 'full'},
    {path: "signup", component: StoreSignupComponent},
    {path: "signin", component: StoreSigninComponent},
    {path: "product", component: ProductComponent, canActivate: [storeGuard]},
    {path: "product/:id", component: ViewProductComponent}
  ]},
  {path: "**", component: NotFoundComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
