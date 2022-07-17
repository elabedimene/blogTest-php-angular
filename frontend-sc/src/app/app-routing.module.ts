import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ArticleComponent } from './articles/article/article.component';

const routes: Routes = [

  { path: 'articles', component: ArticleComponent },

  
  { path: '', redirectTo: 'articles', pathMatch: 'full' }


];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
