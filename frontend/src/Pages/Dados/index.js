import React, {useState} from 'react';
import {Chart} from "react-google-charts";
import './dados.css';
import useApi from '../../services/api';

const Dados = () => {

  const API = useApi();
  const [lista, setLista] = useState([]);

  const apiCasos = async () => {
    const result = await API.getCasos();

    setLista(result.results);

    console.log(result.results);
  }
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
                <li><button onClick={apiCasos}>Pesquisa</button></li>
            </ul>
          </nav>
          <hr></hr>
        </div>
      </div>
      <div className="listas">
          <div id="listando" className="listaCasos">
             {lista.map(function(key, item){
                <p key={key}>{item}</p>
              })}
          </div>
          <div className="casosGrafico">
            <Chart
              width={'680px'}
              height={'450px'}
              position={'FixedChar'}
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