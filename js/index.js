const requestURL = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCnf4Cq2Cn13VfIVyVjMWHsA&key=AIzaSyD--yvoC8t9tjwag2Km8qrNgtvTYlV7u2M';


async function fetchMoviesJson() {
    const response = await fetch(requestURL);
    const youtubeStats = await response.json();
    return youtubeStats;
}


fetchMoviesJson().then(youtubeStats => {
    const youtubeSection = document.getElementById('youtubeSection');

    let youtubeViewCount = youtubeStats.items[0].statistics.viewCount;
    let youtubeSubscriberCount = youtubeStats.items[0].statistics.subscriberCount;
    let youtubevideoCount = youtubeStats.items[0].statistics.videoCount;

    youtubeSection.innerHTML += `
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Seguidores</th>
                    <th scope="col">Vistas</th>
                    <th scope="col">Videos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">${youtubeSubscriberCount}</td>
                    <td class="text-center">${youtubeViewCount}</td>
                    <td class="text-center">${youtubevideoCount}</td>
                </tr>
            </tbody>
        </table>
        `
})