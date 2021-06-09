import React from 'react';
import {Chart} from "react-google-charts";
import './dados.css';

const Dados = () => {

  async function montarCasos(data){
    let html = '';

    for(let i in data){
        html += '<h3>'+data[i].uf+'</h3>';
        html += data[i].state+'<br/>';
        html += '<hr/>';
    }
    document.getElementById("listando").innerHTML = html;
  }

 async function apiCasos() {
    let url = "https://covid19-brazil-api.now.sh/api/report/v1/brazil";
    document.getElementById("listando").innerHTML = 'Carregando...';

    let req = await fetch(url);
    let json = await req.json();
    console.log(json);
    
    montarCasos(json);
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