import { Component, OnInit } from '@angular/core';
import { article } from 'src/app/models/article';
import { ArticleService } from 'src/app/services/article.service';
import { ActivatedRoute, Router } from '@angular/router';
@Component({
  selector: 'app-article',
  templateUrl: './article.component.html',
  styleUrls: ['./article.component.css']
})
export class ArticleComponent implements OnInit {

  art: article[] = [] ; 
  constructor(public artService: ArticleService ) { }

  ngOnInit(): void {
    this.getAll() ;
  }

  getAll(){
    this.artService.getAll().subscribe((data: article[])=>{
      this.art = data;
      console.log(this.art);
      console.log(this.art);

    })  

  }

}
