import React, { useState } from 'react';
import {Chart} from "react-google-charts";
import './inicio.css';

function Inicio(){
      return(
        <div className="corpoInicio">
            <div className="dados">
                    <h1>SarsCovNews</h1>
                    <h2>Sistema de Monitoramento de casos de COVID-19</h2>
            </div>
            <div className="estats">

                <div className="textStats">
                    <h2>Estatísticas Globais</h2>
                    <p>e locais de todos os casos,<br/>
                        apresentadas em gráficos e mapas<br/>
                        interativos
                    </p>
                </div>
                <div className="grafico">
                  <Chart
                    width={'619px'}
                    height={'500px'}
                    chartType="BarChart"
                    loader={<div>Loading Chart</div>}
                    data={[
                      ['País', 'Casos Ativos', 'Casos Recuperados'],
                      ['Brasil', 8175000, 8008000],
                      ['Estados Unidos', 3792000, 3694000],
                      ['Alemanha', 2695000, 2896000],
                      ['China', 2099000, 1953000],
                      ['Portugal', 1526000, 1517000],
                    ]}
                        options={{
                          title: 'Casos de Covid-19',
                          chartArea: {left: 100},
                          isStacked: true,
                          hAxis: {
                            title: 'Total de Casos',
                            minValue: 0,
                          },
                          vAxis: {
                            title: 'Países',
                          },
                          }}
                  />
                </div>
            </div>
            <div className="title">

            </div>
        </div>
    )

}

export default Inicio;