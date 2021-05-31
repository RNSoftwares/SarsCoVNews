import React from 'react';
import './header.css';

function header(){

    return(
        <div className="topInv">
            <div className="Top">
                <p className="Title">SarsCovNews</p>
                <nav>
                    <ul className="Menu">
                        <li><a href="/">Início</a></li>
                        <li><a href="/dados">Dados</a></li>
                        <li><a href="/estatisticas">Estatísticas</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/login">Login</a></li>
                        <li><a href="/cadastro">Cadastre-se</a></li>
                    </ul>
                </nav>
            </div>
        </div>  
    )

}


export default header;