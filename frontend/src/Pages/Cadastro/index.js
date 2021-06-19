import React, {useState, useEffect} from 'react';
import {useHistory} from 'react-router-dom';

import './cadastro.css';
import useApi from '../../services/api';

const Cadastro = () => {

    const API = useApi();
    const history = useHistory();

    const [error, setError] = useState('');
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [cpf, setCpf] = useState('');
    const [sex, setSex] = useState('');
    const [age, setAge] = useState('');
    const [weight, setWeight] = useState('');
    const [height, setHeight] = useState('');
    const [country, setCountry] = useState('');
    const [state, setState] = useState('');
    const [zip_code, setZipCode] = useState('');
    const [city_id, setCity] = useState('');
    const [address, setAddress] = useState('');
    const [phone, setPhone] = useState('');
    const [password, setPassword] = useState('');
    const [password_confirm, setConfirmPassword] = useState('');
    const [City, SetCity] = useState([]);
    const [State, SetState] = useState([]);
    const [selectValue, setSelectValue] = useState('');

    useEffect(() => {
        getStates();
        getCities();
      }, []);

    const getStates = async () => {
        let result = await API.getStates();
        SetState(result.states);
    }
    
    const getCities = async () => {
        let result = await API.getCities(selectValue);
        alert(selectValue);
        SetCity(result.cities);
    }

    const handleRegisterButton = async () => {
        if (name && email && cpf && sex && age && height && weight && country  && state && zip_code && city_id && address && phone && password && password_confirm) {
            const result = await API.register(name, email, cpf, sex, age, height, weight, country, state, zip_code, city_id, address, phone, password, password);

            if (result.error === '') {
                localStorage.setItem('token', result.token);
                history.push('/');
            } else {
                setError(result.error);
                alert(result.error);
            }
        } else {
            alert('Preencha todos os campos!!!');
        }
    }

    

    return(
        <div className="informacoes formulario">
           
               <label>
                   <p>Nome</p><br/> 
                   <input type="text" name="name" value={name} onChange={e=>{setName(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Email</p><br/> 
                   <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" value={email} onChange={e=>{setEmail(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>CPF</p><br/> 
                   <input type="text" id="cpf" name="cpf" pattern="[0-9]{11}" max="11" value={cpf} onChange={e=>{setCpf(e.target.value)}} />
               </label><br/> 
               <label id="sexo">
                   <p>Sexo</p><br/>
                    <label id="lbl_sex" for="male">Masculino</label><br/>
                    <input type="radio" id="sex" name="sex" value="M" onChange={e=>{setSex(e.target.value)}} /><br/>
                    <label id="lbl_sex" for="female">Feminino</label><br/>
                    <input type="radio" id="sex" name="sex" value="F" onChange={e=>{setSex(e.target.value)}} /><br/>
               </label><br/> 
               <label>
                   <p>Idade</p><br/> 
                   <input type="text" name="age" value={age} onChange={e=>{setAge(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Peso</p><br/> 
                   <input type="text" name="weight" value={weight} onChange={e=>{setWeight(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Altura</p><br/> 
                   <input type="text" name="height" value={height} onChange={e=>{setHeight(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>País</p><br/> 
                   <input type="text" name="country" value={country} onChange={e=>{setCountry(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Estado</p><br/> 
                   <select name="state" value={selectValue} onChange={e => setSelectValue(e.target.value)}>
                        {State.map((state, index) => (
                            <option key={index} value={state.id}>{state.name}</option>
                        ))}
                   </select>
               </label><br/>  
               <label>
                   <p>Cidade {selectValue}</p><br/>
                   <select name="city_id">
                        {City.map((city, index) => (
                            <option key={index} value={city.id}>{city.name}</option>
                        ))}
                   </select>
               </label><br/> 
               <label>
                   <p>CEP</p><br/> 
                   <input type="text" name="zip_code" value={zip_code} onChange={e=>{setZipCode(e.target.value)}} />
               </label><br/>
               <label>
                   <p>Endereço</p><br/> 
                   <input type="text" name="address" value={address} onChange={e=>{setAddress(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Celular</p><br/> 
                   <input type="text" name="phone" value={phone} onChange={e=>{setPhone(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Senha</p><br/> 
                   <input type="password" name="password" value={password} onChange={e=>{setPassword(e.target.value)}} />
               </label><br/> 
               <label>
                   <p>Confirmar Senha</p><br/> 
                   <input type="password" name="password_confirm" value={password_confirm} onChange={e=>{setConfirmPassword(e.target.value)}} />
               </label><br/> 
               <label>
                   <p></p><br/> 
               </label><br/> 
               <label id="cadastrar">
                   <button type="submit" onClick={handleRegisterButton}>Confirmar</button>
               </label><br/>
           
        </div>
    );
}
export default Cadastro;