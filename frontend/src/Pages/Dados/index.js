import React from 'react';
import './dados.css';

function dados() {

  return(
    <div className="CorpoDados">
      <div className="data">
        <nav>
          <ul className="busca">
              <li></li>
              <li><a >Ordenar A-Z</a></li>
              <li><a >Ordenar Qntd de Casos</a></li>
              <li><a >Ordenar Z-A</a></li>
              <li><input type="text" placeholder="buscar"></input></li>
              <li><button type="submit">Pesquisa</button></li>
          </ul>
          </nav>
          <hr></hr>
      </div>
      <div className="casos">
        <div className="casosLista">

        </div>
        <div className="casosDados">

        </div>
      </div>
    </div>
  )

}

export default dados;