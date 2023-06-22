import { Component } from '@angular/core';
import { MatDialog } from '@angular/material/dialog';
import { DialogComponent } from '../dialog/dialog.component';

@Component({
  selector: 'app-material',
  templateUrl: './material.component.html',
  styleUrls: ['./material.component.css']
})
export class MaterialComponent {
  public inp = "";

  constructor (public dialog: MatDialog) {}


  openDialog() {
    let dialog = this.dialog.open(DialogComponent, {
      width: "600px",
      height: "40vh",
      data: {message: "Hello Peace!"}
    });
    dialog.afterClosed().subscribe(response => {
      console.log(response);
      // if (response) {
      //   alert(response);
      // }
    })
  }
}
