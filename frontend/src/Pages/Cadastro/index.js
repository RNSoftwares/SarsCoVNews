import React from 'react';
import {Tela, Email, Titulo, Corpo, Texto} from './style.js';



function Sobre() {

    return(
        <Corpo>
        <Tela>
            <Titulo>Cadastro</Titulo>
            <Email type="email"></Email>
            <Titulo>Senha</Titulo>  
            <Email type="password"></Email>
            <Texto href="/cadastro">Não tem uma conta? Cadastre-se</Texto><br/>
            <Texto href="/EsqueceuSenha">Esqueceu sua senha?</Texto>
        </Tela>
    </Corpo>
    );
}
export default Sobre;