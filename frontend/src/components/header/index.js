import React from 'react';

import './header.css';
import useApi from '../../services/api';

const token = localStorage.getItem('token');
const user = localStorage.getItem('user');

const Header = () => {

    const API = useApi();

    const handleLoggout = async () => {
        let token = localStorage.getItem('token');
        await API.logout(token);
        window.location.href = '/';
    }

    return(
        <div className="topInv">
            <div className="Top">
                <p className="Title">SarsCovNews</p>
                <nav>
                    <ul className="Menu">
                        <li><a href="/">Início</a></li>
                        <li><a href="/dados">Dados</a></li>
                        <li><a href="/estatisticas">Dúvidas</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        {!token &&
                            <ul className="Menu">
                                <li><a href="/login">Login</a></li>
                                <li><a href="/cadastro">Cadastre-se</a></li>
                            </ul>
                        }
                        {token &&
                            <ul className="Menu">
                                <li><button onClick={handleLoggout}>Sair</button></li>
                                <li><a href="">{user}</a></li>
                            </ul>
                        }
                    </ul>
                </nav>
            </div>
        </div>  
    )
}


export default Header;