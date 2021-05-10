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
                <div className="grafico">
                    <Chart
                        width={'500px'}
                        height={'500px'}
                        chartType="Bar"
                        loader={<div>Carregando Grafico</div>}
                        data={[
                            ['Year', 'Sales', 'Expenses', 'Profit'],
                            ['2014', 1000, 400, 200],
                            ['2015', 1170, 460, 250],
                            ['2016', 660, 1120, 300],
                            ['2017', 1030, 540, 350],
                        ]}
                        options={{
                            // Material design options
                            chart: {
                            title: 'Company Performance',
                            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
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