const baseUrl = 'https://api.covid19api.com';


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
    return{

        getGlobal: async() => {
            let json = await request('get', '/summary', {});

            return json;
        },

        getProvinces: async() => {
            let json = await request('get', '/summary', {});

            return json;
        }

    };
}