import axios from 'axios';

// const s = axios.create({
//     baseURL: 'http://127.0.0.1:8000/',
// });

// const url = 'http://127.0.0.1:8000/api/condominios';

// async function getCondominios(params) {
//     let response = await  s.get('/api/condominios')
//     .then(response => console.log(response))
//     .catch(error => console.error(error));

//       await axios.get(url).
//         then(response => {
//             console.log(response.data);
//             renderResults.textContent = JSON.stringify(data);
            
//             console.log('Sucess!');
//         })    
//         .catch(e => {
//             console.log(e);
//             console.log('Error');            
//         })
//         .finally(f => {
//             console.log('Finalizou a request');
//         });   
// }

// import axios from 'axios';
// //const axios = require('axios'); // legacy way

// // Make a request for a user with a given ID
// axios.get('http://127.0.0.1:8000/api')
//   .then(function (response) {
//     // handle success
//     console.log(response.data);
//   })
//   .catch(function (error) {
//     // handle error
//     console.log(error);
//   })
//   .finally(function () {
//     // always executed
//   });

// // Optionally the request above could also be done as
// // axios.get('/condominios', 
// //     // {
// //     // params: {
// //     //   ID: 12345
// //     // }
// // //   }
// // )
// //   .then(function (response) {
// //     console.log(response.data);
// //   })
// //   .catch(function (error) {
// //     console.log(error);
// //   })
// //   .finally(function () {
// //     // always executed
// //   });

// // Want to use async/await? Add the `async` keyword to your outer function/method.
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