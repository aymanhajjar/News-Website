 const url = 'localhost/news_website/news_backend'
 
 $.get(`http://${url}/getnews.php`, function(data, status){
    parsed_data = JSON.parse(data) 
    parsed_data.forEach((article) => {
        $('#news-container').append(`<div class="news-card">
        <h3>${article.title}</h3>
        <h5>${article.datetime}</h5>
        <p>${article.details}</p>
        </div>`)
    })
  });