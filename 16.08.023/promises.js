function dataFetch() {
    return new Promise((resolve, reject) => {
        fetch('https://jsonplaceholder.typicode.com/posts/1/comments')
            .then(response => {
               
                return response.json();
            })
            .then(data => {
                resolve(data);
            })
            .catch(error => {
                reject(error);
            });
    });
}

dataFetch()
    .then(data => {
        console.log( data);
    })
    .catch(error => {
        console.error( error);
    });
