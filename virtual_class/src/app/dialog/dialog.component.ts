import { Component, Inject } from '@angular/core';
import {MAT_DIALOG_DATA, MatDialogRef} from '@angular/material/dialog';

@Component({
  selector: 'app-dialog',
  templateUrl: './dialog.component.html',
  styleUrls: ['./dialog.component.css']
})
export class DialogComponent {
  constructor (@Inject(MAT_DIALOG_DATA) public data: any, public dialogRef: MatDialogRef<DialogComponent>) {}

  public send = "Hi! How are you doing?"
  ngOnInit () {
    console.log(this.data);
  }

  closeDialog () {
    this.dialogRef.close("Hello Joy");
  }



}
