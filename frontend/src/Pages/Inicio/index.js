import React, { useState } from 'react';
import {Chart} from "react-google-charts";
import './inicio.css';

function Inicio(){
    const [options, setOptions] = useState({
        title: 'Gráfico de Pizza',
        display: 'flex',
        width: '500px',
        height: '500px',
        chartArea: { width: '90%' },
        width_units: '%'
      });
      const [optionsBar, setOptionsBar] = useState({
        title: 'Gráfico de Barra'
      });
      const [data, setData] = useState([
        ['Linguagens', 'Quantidade'],
        ['React', 100],
        ['Angula', 80],
        ['Vue', 50],
      ]);
      const [dataBar, setDataBar] = useState([
        ['Cidades', '2010 População', '2000 População'],
        ['New York City, NY', 8175000, 8008000],
        ['Los Angeles, CA', 3792000, 3694000],
        ['Chicago, IL', 2695000, 2896000],
        ['Houston, TX', 2099000, 1953000],
        ['Philadelphia, PA', 1526000, 1517000],
      ])
    return(
        <div className="corpoInicio">
            <div className="dados">
                    <h1>SarsCovNews</h1>
                    <h2>Sistema de Monitoramento de casos de COVID-19</h2>
            </div>
            <div className="estats">
                    <Chart
                        width={'500px'}
                        height={'300px'}
                        chartType="PieChart"
                        data={dataBar}
                        setOptions={options}
                    />
                <div className="textStats">
                    <h2>Estatísticas Globais</h2>
                    <p>e locais de todos os casos,<br/>
                        apresentadas em gráficos e mapas<br/>
                        interativos
                    </p>
                </div>
                <div className="grafico">
                </div>
            </div>
            <div className="title">

            </div>
        </div>
    )

}

export default Inicio;