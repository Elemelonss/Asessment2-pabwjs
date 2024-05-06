function getData() {
    $.ajax({
        url: "get_data.php",
        type: "GET",
        dataType: "json",
        success: function(response) {
            displayData(response);
        }
    });
}

function displayData(data) {
    $("#data-table").empty();

    $.each(data, function(index, item){
        var row = "<tr>" +
        "<td>" + item.id + "</td>" +
        "<td>" + item.nama_barang + "</td>" +
        "<td>" + item.harga + "</td>" +
        "<td>" + item.stok + "</td>" +

        "<td><button onclick='deleteData(" + item.id + ")'>Hapus</button></td>" +
        "</tr>";
    $("#data-table").append(row);
    });
}

function deleteData(id) {
    $.ajax({
        url: "delete_data.php" + id,
        type: "GET",
        success: function(response) {
            getData();
        }   
    });
}

$(document).ready(function() {
    getData();
});