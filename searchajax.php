<?php
error_reporting(0);
header("Content-Type: application/json");
$term = $_GET['term'];
$list = json_decode('[{"value":"Carpentry & Construction","id":15},{"value":"Cleaning","id":4},{"value":"Computer Help","id":23},{"value":"Decoration Help","id":28},{"value":"Deep Clean","id":20},{"value":"Delivery","id":7},{"value":"Electrical Help","id":8},{"value":"Event Staffing","id":19},{"value":"Full Service Help Moving","id":21},{"value":"Furniture Assembly","id":1},{"value":"Furniture Removal","id":18},{"value":"Help Moving","id":3},{"value":"Home Repairs","id":5},{"value":"Interior Design Service","id":29},{"value":"Laundry Help","id":25},{"value":"Mounting","id":2},{"value":"Moving Heavy Furniture Service","id":9},{"value":"Office Administration","id":31},{"value":"Organization","id":16},{"value":"Packing & Unpacking","id":14},{"value":"Painting","id":12},{"value":"Personal Assistant","id":17},{"value":"Photography","id":26},{"value":"Plumbing","id":11},{"value":"Pressure Washing","id":30},{"value":"Running Your Errands","id":13},{"value":"Shopping","id":22},{"value":"Smart Home Installation","id":27},{"value":"Wait in Line","id":24},{"value":"Yard Work Services","id":10}]', 1);

$res = [];
for ($i = 0; $i < count($list); $i++) {
    if (str_contains(strtolower($list[$i]["value"]), strtolower($term))) {
        $res[] = ["value" => $list[$i]["value"], "id" => $list[$i]["id"]];
    }
}
echo json_encode($res, 1);
