import React, {useState} from 'react';
import './login.css';
import API from '../../services/api';

function Login() {

    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const handleLoginButton = async () => {
        if (email && password) {
            let result = await API.login(email, password);

            if (result.error === '') {
                window.location.href = '/';
            } else {
                window.location.href = '/login';
            }
        }
    }

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
                        <input type="text" placeholder="E-mail" value={email} onChange={e=>{setEmail(e.target.value)}}></input>
                    </div>
                    <div className="senha">
                        <div className="icone">
                            <img src="./images/padlock.svg"/>
                        </div>
                        <input type="password" placeholder="Senha" value={password} onChange={e=>{setPassword(e.target.value)}}></input>
                    </div>
                    <div className="botao">
                        <button type="submit" onclick={handleLoginButton}>Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Login;