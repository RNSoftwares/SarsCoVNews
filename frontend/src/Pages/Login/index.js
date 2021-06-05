import React, {useState} from 'react';
import {useHistory} from 'react-router-dom';
import './login.css';
import useApi from '../../services/api';

const Login = () => {

    const API = useApi();
    const history = useHistory();

    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [error, setError] = useState('');

    const handleLoginButton = async () => {
        if (email && password) {
            const result = await API.login(email, password);

            if (result.error === '') {
                localStorage.setItem('token', result.token);
                localStorage.setItem('user', result.name);
                history.push('/');
            } else {
                setError(result.error)
            }
        } else {
            alert('Preencha os campos!!!');
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
                            <img src="./images/login.svg" alt="icone de email"/>
                        </div>
                        <input type="text" placeholder="E-mail" value={email} onChange={e=>{setEmail(e.target.value)}} />
                    </div>
                    <div className="senha">
                        <div className="icone">
                            <img src="./images/padlock.svg" alt="icone de cadeado"/>
                        </div>
                        <input type="password" placeholder="Senha" value={password} onChange={e=>{setPassword(e.target.value)}} />
                    </div>
                    <div className="botao">
                        <button type="submit" onClick={handleLoginButton}>Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    )
}
export default Login;