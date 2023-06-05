import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ProductComponent } from './product/product.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { SigninComponent } from './signin/signin.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { StoreSignupComponent } from './store-signup/store-signup.component';
import { StoreSigninComponent } from './store-signin/store-signin.component';
import { ViewProductComponent } from './view-product/view-product.component';
import { UserSignupComponent } from './user-signup/user-signup.component';

@NgModule({
  declarations: [
    AppComponent,
    ProductComponent,
    SigninComponent,
    NotFoundComponent,
    StoreSignupComponent,
    StoreSigninComponent,
    ViewProductComponent,
    UserSignupComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
