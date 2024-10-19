import { RouterModule, Routes } from '@angular/router'; //Siempre poner esto
import { ModuleWithProviders } from "@angular/core"; //Siempre poner esto


import { /*Nombre del componente*/ } from /* Carpeta del componente */;
import { /*Nombre del componente*/  } from /* Carpeta del componente */;
import { /*Nombre del componente*/ } from /* Carpeta del componente */;





const appRoutes: Routes = [

  {path: '',component: HomeComponent}, //Este componente seria como la pestaña principal
  {path: 'calc',component: CalcComponent}, //Este es un ejemplo de como se deberia de ver
  {path: '/*Identificador del componente*/',component: /* Fichero del componente */},
  {path: '/*Identificador del componente*/',component: /* Fichero del componente */},
  {path: '**',component: HomeComponent} //Este componente seria como la pestaña principal

  

];


  
export const appRoutingProviders: any[]= []  //Siempre poner esto

export const routing: ModuleWithProviders<any> = RouterModule.forRoot(appRoutes) //Siempre poner esto


/*<router-outlet></router-outlet>*/  //PONER ESTO EN EL App.component.html


//Esto es una funcion por si quieres sacar en que pestaña estas o algo asi

ngOnInit(){
  this._route.params.subscribe((params:Params)=>
     {this.nombre = params['nombre']
      this.followers = params['followers']
      
      console.log(this.nombre)
      console.log(this.followers)})

     
        console.log(this.zapatillas);
    
        this.GetMarcas()
     
 }

 
