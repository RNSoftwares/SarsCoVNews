import React from 'react';
import Chart from "react-google-charts";
import './style.css';

function inicio(){
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
                    <Chart className="teste"
                        width={'550px'}
                        height={'550px'}
                        background-color= {'#000'}
                        position= {'fixed'}
                        chartType="Bar"
                        loader={<div>Carregando Grafico</div>}
                        data={[
                            ['Casos', 'Suspeitos', 'Ativos', 'Recuperados'],
                            ['JAN', 10000, 30000, 45000],
                            ['FEV', 16578, 5326, 10238],
                            ['MAR', 25963, 14698, 24659],
                            ['ABR', 51973, 12677, 35416],
                            ['MAI', 56327, 1493, 57893],
                        ]}
                        options={{  
                            chart: {
                            title: 'Casos em 2021',
                            },
                        }}


                        

                        // For tests
                        rootProps={{ 'data-testid': '2' }}
                    />
                </div>
            </div>
            <div className="title">

            </div>
        </div>
    )

}

export default inicio;