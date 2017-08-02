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
  address:Address;
  hobbies:string[];
  hello:string;

  constructor() { 
    console.log('tmConstructor operating fine ...');
  }

  ngOnInit() {
    console.log('ngOnInit operating well-alreight');
    this.name = 'Tom Milton';
    this.age = 30;
    this.address = {
        street:'30 main st.',
        city: 'Boston',
        state:'MA'
        }
this.hobbies = ['write code', 'watch movies', 'listen to music'];
this.hello = 'hello';
}
onClick(){
  this.name = 'Thomas Milton Maestas';
  this.hobbies.push('New Hobby');
}
addHobby(hobby){
  console.log(hobby);
  this.hobbies.unshift(hobby);
  return false;
}
deleteHobby(hobby){
  for(let i = 0;i <this.hobbies.length;i++){
    if(this.hobbies[i] == hobby){
      this.hobbies.splice(i, 1);
    }
  }
 }
}
interface Address {
    street:string,
    city:string,
    state:string
  }