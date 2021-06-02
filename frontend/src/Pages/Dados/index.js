import React from 'react';
import {Chart} from "react-google-charts";
import './dados.css';

function dados() {

  return(
    <div className="CorpoDados">
      <div className="barraBusca">
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
      </div>
      <div className="casos">
        <div className="casos">
          <div className="casosLista">

          </div>
          <div className="casosGrafico">
            <Chart
              width={'500px'}
              height={'300px'}
              chartType="GeoChart"
              data={[
                ['Country', 'Popularity'],
                ['Germany', 200],
                ['United States', 300],
                ['Brazil', 400],
                ['Canada', 500],
                ['France', 600],
                ['RU', 700],
              ]}
              mapsApiKey="AIzaSyCDDfhiUWrdeiKaPLJZmpVKCcv9N8MdssA"
              rootProps={{ 'data-testid': '1' }}
            />
          </div>
        </div>
      </div>
    </div>
  )

}

export default dados;