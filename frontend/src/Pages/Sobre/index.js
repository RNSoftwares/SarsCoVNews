import React from 'react';
import './sobre.css';


const Sobre = () => {
  return(
    <div className="sobri">
        <div className="texto">
            Sobre Nós:<br/><br/><br/>
              Somos dois alunos de Ciência da Computação da UNOESC, criando
              um projeto que consiste no monitoramento de casos de covid-19.<br/>
              Criamos no ano de 2020 a primeira versão desse projeto, porém
              percebemos que podíamos fazer melhor, então começamos a desenvolver
              esta versão, feita exclusivamente para web.
              Possuimos aqui, um monitoramento de casos onde é possível cada um 
              escolher como quer ordenar os casos, e temos a possibilidade de
              filtragem por país, estado e cidades do mundo todo.
              Contamos com um sistema inicial de tira-dúvidas, onde você poderá
              tirar suas dúvidas, que serão respondidas por profissionais qualificados.

        </div>
    </div>
  )
}

export default Sobre;