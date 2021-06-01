import React from 'react';
import './cadastro.css';



function Cadastro() {

    return(
        <div className="informacoes">
            <div className="dado">
                <div className="inf">
                    <p>Nome:</p>
                    <input type="text" id="nome"></input>
                </div>
                <div className="inf">
                    <p>Idade:</p>
                    <input type="number" id="idade" required="required"></input>
                </div>
                <div className="inf">
                    <p>CPF:</p>
                    <input type="number" id="cpf"></input>
                </div>
                <div className="inf">
                    <p>Celular:</p>
                    <input type="number" id="telefone"></input>
                </div>
                <div className="inf">
                    <p>Altura(cm):</p>
                    <input type="number" id="altura"></input>
                </div>
                <div className="inf">
                    <p>Peso(Kg):</p>
                    <input type="number" id="peso"></input>
                </div>
            </div>
            <div  className="dado">
                <div className="inf">
                        <p>Endereço:</p>
                        <input type="text" id="nome"></input>
                    </div>
                    <div className="inf">
                        <p>CEP:</p>
                        <input type="text" id="idade" required="required" pattern="[0-9]+$"></input>
                    </div>
                    <div className="inf">
                        <p>Sexo:</p>
                        <input type="number" id="cpf"></input>
                    </div>
                    <div className="inf">
                        <p>Celular  :</p>
                        <input type="number" id="telefone"></input>
                    </div>
                    <div className="botao">
                        <button>Confirmar</button>
                    </div>
            </div>
        </div>
    );
}
export default Cadastro;