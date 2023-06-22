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
import { PhoneValidateDirective } from './phone-validate.directive';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MaterialComponent } from './material/material.component';
// import {MatButtonModule} from '@angular/material/button';
// import { MatIconModule } from '@angular/material/icon';
import { DialogComponent } from './dialog/dialog.component';
import { MaterialsModule } from './materials.module';

@NgModule({
  declarations: [
    AppComponent,
    ProductComponent,
    SigninComponent,
    NotFoundComponent,
    StoreSignupComponent,
    StoreSigninComponent,
    ViewProductComponent,
    UserSignupComponent,
    PhoneValidateDirective,
    MaterialComponent,
    DialogComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    ReactiveFormsModule,
    BrowserAnimationsModule,
    // MatButtonModule,
    // MatIconModule,
    MaterialsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
