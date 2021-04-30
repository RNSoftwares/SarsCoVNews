import React from 'react';
import {BrowserRouter, Switch, Route} from 'react-router-dom';
import Login from './Pages/Login';
import Cadastro from './Pages/Cadastro';
import Inicio from './Pages/Inicio';
import Header from './components/header';
import Footer from './components/footer';
// BrowserRouter começa todo o aplicativo

//exact = procura o caminho exato especificado Ex: path="/"  vai procurar exatamente a rota com somente a /


function App() {
  
  return (
    <BrowserRouter>
      <Switch>  
          <Route exact path="/"> 
            <Header/>
            <Inicio/>
            <Footer/>
          </Route>

          <Route path="/cadastro">
            <Cadastro/>
          </Route>

          <Route exact path="/login">
            <Login/>
          </Route>

      </Switch>   
  </BrowserRouter>


  );
}

export default App;
