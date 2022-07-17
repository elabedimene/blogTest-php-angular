import { Injectable } from '@angular/core';
import { HttpClient,HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})

export class ArticleService {
  public  apiURL = 'http://localhost/backend-sc';


  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }
  
   constructor(private httpClient: HttpClient) { }
  
  

  getAll(): Observable<any> {
      return this.httpClient.get(this.apiURL + '/listarticles' )
      
      
  }

 
}
