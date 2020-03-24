
//DOM ready
window.addEventListener('load', init);


//global

let tBodyPlayers;
let inputSearch;
/**
 * Initialize application
 */
function init()
{
    tBodyPlayers = document.getElementById('players');
    inputSearch = document.getElementById('club-name');

    let filterForm = document.getElementById('football-search');

    filterForm.addEventListener('submit', getPlayersByClub);

    getPlayers();
}

function getPlayers()
{
    fetch('http://localhost:8080/projectzero/public/producten.php')
        .then((response) => {
            if (!response.ok) {
                console.log(response);
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(getPlayersSuccessHandler)
        .catch(getPlayersErrorHandler);
}

function getPlayersByClub(e)
{
    e.preventDefault();

    fetch('http://localhost:8080/projectzero/public/producten.php?club=' + inputSearch.value)
        .then((response) => {
            if (!response.ok) {
                console.log(response);
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(getPlayersSuccessHandler)
        .catch(getPlayersErrorHandler);
}

function getPlayersSuccessHandler(data)
{
    tBodyPlayers.innerHTML = "";
    const ageAndGender = player => player.club === document.getElementById('test').value;

    const arr3 = data.filter(ageAndGender);
    console.log('arr3', arr3);

    for(data of arr3){
        let tr = document.createElement('div');

        let tdSurname = document.createElement('h4');
        tdSurname.innerHTML =
            "        <div class=\"col-xs-6 col-md-3\">\n" +
            "            <div class=\"panel panel-default\">\n" +
            "                <div class=\"panel-body easypiechart-panel\">\n" +
            "                    <h4>" + data.product_name + "</h4>" +
            "<img src='http://localhost:8080/projectzero/public/image/" + data.product_image + "' class='img-responsive' alt='' style='width:100px;position:relative;left:130px;'>" +
            " <div class=\"col-md-12\">\n" +
            " <form class=\"form-horizontal\" action='http://localhost:8080/projectzero/public/producten.php?club=" + data.product_name + "' method='post' style=\"position:relative;left:15px;\">" +
            "<input type='text' name='product_naam' value='" + data.product_name + "' style='display:none;' />" +
            "<input type='text' name='product_beschrijving' value='" + data.product_text + "' style='display:none;' />" +
            "<input type='text' name='product_prijs' value='" + data.product_prijs + "' style='display:none;' />" +
            "<input type='text' name='product_image' value='" + data.product_image + "' style='display:none;' />" +
            "     <button id='button_product' type='submit' name='button_producten' class=\"btn btn-info btn-zoeken\" style=\"position:relative;height:40px;width:108%;left:-28px;\" value='" + data.id + "'>Bekijken</button>\n" +
            "</form>"+
            "                </div>" +
            "\n" +
            "\n" +
            "                </div>\n" +
            "            </div>\n" +
            "        </div>";
        tr.appendChild(tdSurname);


        tBodyPlayers.appendChild(tr);
    }
}

function getPlayersErrorHandler(data)
{

}

function product(data){

}
