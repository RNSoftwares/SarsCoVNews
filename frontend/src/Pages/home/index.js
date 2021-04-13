import React from 'react';
import {Tela, Email, Titulo, Corpo, Texto, Confirma} from './style.js';

function login() {

    return(
    <Corpo>
        <Tela>
            <Titulo>E-mail</Titulo>
            <Email type="email"></Email>
            <Titulo>Senha</Titulo>  
            <Email type="password"></Email>
            <Confirma>Entrar</Confirma><br/>
            <Texto href="/cadastro">Não tem uma conta? Cadastre-se</Texto><br/>
            <Texto href="/EsqueceuSenha">Esqueceu sua senha?</Texto>
        </Tela>
    </Corpo>
    )
}
export default login;