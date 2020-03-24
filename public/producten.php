<?php
$producten = [
    [
        "id" => 1,
        "product_name" => "Maandkalender 2020",
        "product_image" => "agenda.jpg",
        "club" => "Hema",
        "product_text" => "Een maandkalender van het jaar 2020 op een goudkleurige standaard, bijvoorbeeld voor op je bureau.",
        "product_prijs" => 5,
    ],
    [
        "id" => 2,
        "product_name" => "Tompouce",
        "product_image" => "tompouce.jpg",
        "club" => "Hema",
        "product_text" => "Bladerdeeg gevuld met onze luchtige HEMA vulling en gedecoreerd met een laagje roze fondant.",
        "product_prijs" => 1,
    ],
    [
        "id" => 3,
        "product_name" => "Gevlochten placemat",
        "product_image" => "placemat.jpg",
        "club" => "Hema",
        "product_text" => "Een ronde gevlochten placemat, gemaakt van jute.",
        "product_prijs" => 5,
    ],
    [
        "id" => 4,
        "product_name" => "Hoofdkussen",
        "product_image" => "kussen.jpg",
        "club" => "Hema",
        "product_text" => "De vulling van dit latex hoofdkussen zorgt voor een optimaal comfort en een goede nachtrust.",
        "product_prijs" => 9,
    ]
];

if (isset($_GET["club"]) && $_GET["club"] != "") {
    $producten = array_values(array_filter($producten, function ($product) {
        return ($product["product_name"] == $_GET["club"]);
    }));

}

//    if (json_encode($producten) == $_POST["button_producten"]) {
//        echo "jo";
//    }
if (isset($_POST["button_producten"])) {

    echo "<link href=\"./css/bootstrap.min.css\" rel=\"stylesheet\">
<div class='row'>
<div class='col-md-6'>
<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\" style='width:200px;'>Product naam</th>
      <th scope=\"col\" style='width:400px;'>Product beschrijving</th>
      <th scope=\"col\">Product prijs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">" .$_POST["button_producten"]. "</th>
      <td style='width:200px;'>" .$_POST["product_naam"]."</td>
      <td style='width:400px;'>" .$_POST["product_beschrijving"]."</td>
      <td><b>€ " .$_POST["product_prijs"].",-</b></td>
    </tr>
  </tbody>
</table>
</div>
<div class='col-md-6'>
<img src='http://localhost:8080/projectzero/public/image/" .$_POST["product_image"]. "' class='img-responsive' alt='' style='width:600px;'>
</div>

<div class='row' style='position: relative;top:-500px;left:12px;'>
<div class='col-md-6'>
<form id=\"form-opslaan\" action='' method='post' class=\"form-horizontal\" style=\"position:relative;left:15px;\">
<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\" style='width:200px;'>Product naam</th>
      <th scope=\"col\" style='width:400px;'>Product beschrijving</th>
      <th scope=\"col\">Product prijs</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">" .$_POST["button_producten"]. "</th>
      <td style='width:200px;'><input type=\"text\" class=\"form-control\" name='product_naam' id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" value='" .$_POST["product_naam"]. "'></td>
      <td style='width:400px;'><textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name='beschrijving'>" .$_POST["product_beschrijving"]."</textarea></td>
      <td><b><input type=\"number\" class=\"form-control\" id=\"tentacles\" name=\"tentacles\" value='" .$_POST["product_prijs"]."'></b></td>
    </tr>
  </tbody>
</table>
<div class='buttons' style='position:absolute;right:0px;'>
<a href='http://localhost:8080/projectzero/public/home'><button type=\"button\" class=\"btn btn-info\">Terug</button></a>
<button type=\"submit\" class=\"btn btn-success\" name='submit'>Opslaan</button>
</div>
</form>
</div>
</div>";
}

if(isset($_POST['submit'])) {
    $file = array_values(array_filter($producten, function ($product){
        $product["product_name"];
    }));
    echo $file;
    $arr = array(
        'product_name'     => $_POST['product_naam'],
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}


//Set the header to tell the client some json is coming its way
//header("Content-Type: application/json");

echo json_encode($producten);
exit;
