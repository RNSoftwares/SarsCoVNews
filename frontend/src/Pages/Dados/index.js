import React, {useState} from 'react';
import {Chart} from "react-google-charts";
import './dados.css';
import useApi from '../../services/api';
import useApiCases from '../../services/apiCases';

const Dados = () => {

  const API = useApi();
  const api = useApiCases();
  const [totalDeaths, setTotalDeaths] = useState('');
  const [totalConfirmed, setTotalConfirmed] = useState('');
  const [totalRecovered, setTotalRecovered] = useState('');
  const [casesCountry, setCasesCountry] = useState([]);

    const listarCasos = async() => {
      let result = await api.getGlobal();
      console.log(result.Global);
      setCasesCountry([]);

      setTotalDeaths(result.Global.TotalDeaths);
      setTotalConfirmed(result.Global.TotalConfirmed);
      setTotalRecovered(result.Global.TotalRecovered);

    }

    const paisCasos = async() => {
      let result = await api.getProvinces();
      console.log(typeof result.Countries);
      setTotalDeaths('');
      setTotalConfirmed('');
      setTotalRecovered('');
      

      for(let i=0; i <= 191; i++){
        setCasesCountry(result.Countries);
      }


      setCasesCountry(result.Countries);
    }

 


return(
<div className="CorpoDados">
  <div className="barraBusca">
    <div className="data">
      <nav>
        <ul className="busca">
          <li><a onClick={listarCasos}>Total Global</a></li>
          <li><a onClick={paisCasos}>Casos por País</a></li>
        </ul>
      </nav>
      <hr></hr>
    </div>
  </div>
  <div className="listas">
    {totalDeaths != 0 && totalConfirmed != 0 && totalRecovered != 0 &&
      <table>
        <thead>
          <tr>
            <td>Total Confirmados</td>
            <td>Total Mortes</td>
            <td>Total Recuperados</td>
          </tr>
        </thead>
        <tbody> 
          <tr>
            <td>{totalConfirmed}</td>
            <td>{totalDeaths}</td>
            <td>{totalRecovered}</td>
          </tr>
        </tbody>
      </table>
    }
    {casesCountry != 0 &&
      <table>
        <thead>
          <tr>
            <td>País</td>
            <td>Total Confirmados</td>
            <td>Total Mortes</td>
            <td>Total Recuperados</td>
          </tr>
        </thead>
        <tbody>
          {Object.keys(casesCountry).map((item, index) => {
          return[
          <tr key={index}>
            <td>{casesCountry[item].Country}</td>
            <td>{casesCountry[item].TotalConfirmed}</td>
            <td>{casesCountry[item].TotalDeaths}</td>
            <td>{casesCountry[item].TotalRecovered}</td>
          </tr>
          ];
          })}
        </tbody>
      </table>
    
    }
  </div>
</div>
)
}

export default Dados;