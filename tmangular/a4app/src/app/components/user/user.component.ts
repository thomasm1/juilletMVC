import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {
  name:string;
  age:number;
  email:string;
  address:

  constructor() { 
    console.log('tmConstructor operating fine ...');
  }

  ngOnInit() {
    console.log('ngOnInit operating well-alreight');
    this.name = 'Tom Milton';
    this.age = 30;

  }

}
