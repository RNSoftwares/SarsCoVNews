import React from 'react';
import {Fundo, Menu, List, Item} from './style.js';


function inicio(){

    return(
        <Fundo>
            <Menu>
                <List>
                    <Item href="/">Home</Item>
                    <Item>Procurar</Item>
                    <Item>Estatísticas Nacionais</Item>
                    <Item>Estatísticas Globais</Item>
                    <Item>Relatórios</Item>
                    <Item>Sobre</Item>
                </List>
            </Menu>
        </Fundo>
    )

}

export default inicio;