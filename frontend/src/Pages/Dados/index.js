import React from 'react';
import {Chart} from "react-google-charts";
import './dados.css';

function apiCasos() {

  fetch("https://covid19-brazil-api.now.sh/api/report/v1/brazil", {
    "method": "GET"
    })
    .then(response => console.log(response))
    .catch(err => console.error(err));

    return 0;
}



const Dados = () => {


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
      <div className="listas">
          <div className="listaCasos">

















          </div>
          <div className="casosGrafico">
            <Chart
              width={'680px'}
              height={'400px'}
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
  )
}
export default Dados;