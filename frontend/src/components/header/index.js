import React from 'react';
import './style.css';

function header(){

    return(
        <div className="Top">
            <p className="Title">SarsCovNews</p>
            <nav>
                <ul className="Menu">
                    <li><a href="">Início</a></li>
                    <li><a href="">Dados</a></li>
                    <li><a href="">Estatísticas</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/cadastro">Cadastre-se</a></li>
                </ul>
            </nav>
        </div>
    )

}


export default header;