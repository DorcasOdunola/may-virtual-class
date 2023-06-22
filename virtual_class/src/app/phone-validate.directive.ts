import { Directive } from '@angular/core';
import { AbstractControl, NG_VALIDATORS, Validator } from '@angular/forms';

@Directive({
  selector: '[appPhoneValidate]',
  providers: [{provide: NG_VALIDATORS, useExisting: PhoneValidateDirective, multi: true}]
})
export class PhoneValidateDirective implements Validator {

  constructor() { }
  validate(control: AbstractControl) : {[key: string]: any} | any {
    if (control.value) {
      console.log(control.value, "here");
      let value = control.value.toString();
      if (value.indexOf("+") == -1) {
        return {noCountryCode: true}
      } else if (value.indexOf("+") > 0) {
        return {wrongPosition: true}
      }
    }
  }

}
