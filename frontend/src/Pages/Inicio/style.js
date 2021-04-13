import styled from 'styled-components';



export const Fundo = styled.div`

    max-width: 1920px;
    width: 100%;
    height: calc(100vh - 50px);
    background-color: #fff;
    color: #fff;
    margin: auto;
`;


export const Menu = styled.div`

    width: 200px;
    height: 100%;
    background-color: #f00;
    display: flex;
`;


export const List = styled.ul`
    background-color: #4B0082;
    width: 200px;
    list-style: none;
    margin: 0;
`;


export const Item = styled.li`
    background-color:#4B0082;
    margin-left: -40px;
    height: 50px;
    margin-bottom: 10px;
    font-size: 20px;
    border: 10px 5%;
    color: #000;
    border-bottom: 1px solid #fff;
`;