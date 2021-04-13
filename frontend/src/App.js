import React from 'react';
import {BrowserRouter, Switch, Route, Link} from 'react-router-dom';
import Login from './Pages/home';
import Cadastro from './Pages/Cadastro';
import Inicio from './Pages/Inicio';
import Header from './components/header';


// BrowserRouter começa todo o aplicativo

//exact = procura o caminho exato especificado Ex: path="/"  vai procurar exatamente a rota com somente a /


function App() {
  
  return (
    <BrowserRouter>
       <Header/>        
      <switch>

          <Route exact path="/"> 
            <Login/>
          </Route>

          <Route path="/cadastro">
            <Cadastro/>
          </Route>

          <Route exact  path="/inicio">
            <Inicio/>
          </Route>

      </switch>   
  </BrowserRouter>


  );
}

export default App;
