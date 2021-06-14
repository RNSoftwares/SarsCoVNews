//const baseUrl = 'http://127.0.0.1:8000/api';
const baseUrl = 'https://api.brasil.io/v1/dataset/covid19/caso/data/?state';

const token = 'fe48d7e2167d8d8ec6b8939ae8d1253163c45497';

const request = async (method, endpoint, params, token = null) => {
    method = method.toLowerCase();
    let fullUrl = `${baseUrl}${endpoint}`;
    let body = null;

    switch (method) {
        case 'get':
            let queryString = new URLSearchParams(params).toString();
            fullUrl += `?${queryString}`;
        break;

        case 'post':
        case 'put':
        case 'delete':
            body = JSON.stringify(params);
        break;
    }

    let headers = {'Content-type': 'application/json'};

    if (token) {
        headers.Authorization = `Token ${token}`;
    }

    let req = await fetch(fullUrl, {method, headers, body});
    let json = await req.json();
    
    return json;
}

export default () => {
    return {
        register: async (name, email, cpf, sex, age, height, weight, country, state, zip_code, city_id, address, phone, password, password_confirm) => {
            let json = request('post', '/auth/register', {name, email, cpf, sex, age, height, weight, country, state, zip_code, city_id, address, phone, password, password_confirm});
    
            return json;
        },
        login: async (email, password) => {
            let json = request('post', '/auth/login', {email, password});
    
            return json;
        },
        logout: async (token) => {
            let json = await request('post', '/auth/logout', {}, token);

            localStorage.removeItem('token');

            return json;
        },
        getCountries: async () => {
            let json = await request('get', '/location/states', {});

            return json;
        },

        getCasos: async () => {
            let json = await request('get', '', {}, token);

            return json;
        }
    };
}