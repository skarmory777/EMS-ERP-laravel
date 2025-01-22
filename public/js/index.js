const url = 'http://127.0.0.1:8000/api/condominios';

async function getCondominios(params) {
    // let response = await  s.get('/api/condominios')
    // .then(response => console.log(response))
    // .catch(error => console.error(error));

      await axios.get(url).
        then(response => {
            console.log(response.data);
            renderResults.textContent = JSON.stringify(response.data);
            
            console.log('Sucess!');
        })    
        .catch(e => {
            console.log(e);
            console.log('Error');            
        })
        .finally(f => {
            console.log('Finalizou a request');
        });   
}

getCondominios();