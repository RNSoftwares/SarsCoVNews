import styled from 'styled-components';

//estilização das divs
 export const Tela = styled.div`
    width: 500px;
    height: 550px;
    background-color: #fff;
    color: #fff;
    margin: auto;
    border: solid #000 2px;
    box-shadow: 5px 5px 5px black , 5px 5px 5px #aaa;
    text-align: center;
`;

export const Corpo = styled.div`
    background: url(./images/fundo.png) center center no-repeat fixed; 
    max-width: 100%;
    height: 100vh;
    display: flex;
`;

// Input padrão
export const Email = styled.input`
    font-size: 12px;
    display : flex;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 20px;
    width: 300px;
    height: 20px;
    border-radius: 5px;
    border: solid #000 1px;
`;


export const Titulo = styled.h2`
    font-size: 25px;
    color: #000;
    margin: auto;
    text-align: center;
    width: 100px;
    margin-top: 40px;
`;

export const Texto = styled.a`
    font-size: 14px;
    color: #000;
    margin: auto;
    text-decoration: none;
`;



export const Confirma = styled.button`
    width: 100px;
    height: 30px;
    margin-top: 30px;
    margin-bottom: 60px;
    background-color: #fff;
    border: solid 1px #000;
    border-radius: 5px;
    font-weight: bold;
`;