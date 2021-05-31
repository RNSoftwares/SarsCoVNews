import React from 'react';
import './login.css';

function login() {

    return(
        <div className="body">
            <div className="titulo">
                <span>SarsCovNews</span>
            </div>
            <div className="corpo">
                <div className="login">
                    <div className="email">
                        <div className="icone">
                            <img src="./images/login.svg"/>
                        </div>
                        <input type="text" placeholder="E-mail"></input>
                    </div>
                    <div className="senha">
                        <div className="icone">
                            <img src="./images/padlock.svg"/>
                        </div>
                        <input type="password" placeholder="Senha"></input>
                    </div>
                    <div className="botao">
                        <button type="submit">Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default login;