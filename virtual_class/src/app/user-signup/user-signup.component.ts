import { Component } from '@angular/core';
import { AbstractControl, FormBuilder, FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-user-signup',
  templateUrl: './user-signup.component.html',
  styleUrls: ['./user-signup.component.css']
})
export class UserSignupComponent {

  constructor (public formBuilder: FormBuilder) {}

  // first_name = new FormControl("");

  // public userForm = new FormGroup({
  //   first_name: new FormControl (''),
  //   last_name: new FormControl (''),
  //   phone_no: new FormControl (''),
  //   email: new FormControl (''),
  //   address: new FormControl (''),
  //   password: new FormControl (''),
  // })

  public userForm = this.formBuilder.group({
    first_name: ['', [Validators.required, Validators.maxLength(10)]],
    last_name: ['', Validators.required],
    phone_no: ['', [this.validatePhone]],
    email: ['', Validators.email],
    address: [''],
    password: [''],
  })

  validatePhone(control: AbstractControl) : {[key: string]: any} | void {
    if (control.value) {
      console.log(control.value);
      // console.log(control.value.includes("+"));
      // if (control.value.includes("+") == -1) {
      //   return {noCountryCode: true}
      // }
    }
  }

  signUp () {
    if (this.userForm.valid) {
      console.log(this.userForm.value);
      console.log(this.userForm.controls['first_name'].value);
      console.log(this.userForm.get('first_name')?.value);
      this.userForm.controls.first_name.setValue("");
    }
  }

}
