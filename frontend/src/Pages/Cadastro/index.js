import React from 'react';
import './cadastro.css';



const Cadastro = () => {
    return(
        <div className="informacoes">
           <form className="formulario" action="POST">
               <label>
                   <p>Nome</p><br/> 
                   <input type="text" name="name"/>
               </label><br/> 
               <label>
                   <p>Email</p><br/> 
                   <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" />
               </label><br/> 
               <label>
                   <p>CPF</p><br/> 
                   <input type="text" id="cpf" name="cpf" pattern="[0-9]{11}" max="11"/>
               </label><br/> 
               <label id="sexo">
                   <p>Sexo</p><br/>
                    <label id="lbl_sex" for="male">Masculino</label><br/>
                    <input type="radio" id="sex" name="gender" value="male"/><br/>
                    <label id="lbl_sex" for="female">Feminino</label><br/>
                    <input type="radio" id="sex" name="gender" value="female"/><br/>
               </label><br/> 
               <label>
                   <p>Idade</p><br/> 
                   <input type="text" name="age" pattern="[0-9]"/>
               </label><br/> 
               <label>
                   <p>Peso</p><br/> 
                   <input type="text" name="weight"/>
               </label><br/> 
               <label>
                   <p>Altura</p><br/> 
                   <input type="text" name="height"/>
               </label><br/> 
               <label>
                   <p>País</p><br/> 
                   <input type="text" name="country"/>
               </label><br/> 
               <label>
                   <p>Estado</p><br/> 
                   <input type="text" name="state"/>
               </label><br/> 
               <label>
                   <p>CEP</p><br/> 
                   <input type="text" name="zip_code"/>
               </label><br/> 
               <label>
                   <p>Cidade</p><br/> 
                   <input type="text" name="city"/>
               </label><br/> 
               <label>
                   <p>Endereço</p><br/> 
                   <input type="text" name="address"/>
               </label><br/> 
               <label>
                   <p>Celular</p><br/> 
                   <input type="text" name="phone"/>
               </label><br/> 
               <label>
                   <p>Senha</p><br/> 
                   <input type="password" name="password"/>
               </label><br/> 
               <label>
                   <p>Confirmar Senha</p><br/> 
                   <input type="password" name="confirm_password"/>
               </label><br/> 
               <label>
                   <p></p><br/> 
               </label><br/> 
               <label id="cadastrar">
                   <button>Confirmar</button>
               </label><br/>
           </form>
        </div>
    );
}
export default Cadastro;